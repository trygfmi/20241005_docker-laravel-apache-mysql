# $1:viewのファイル名 $2:viewのフォルダ名 $3:controllerのファイル名 $4:controllerのフォルダ名
# $5:controllerのメソッド名 $6:routeのファイル名
# 実行例：./availableWatchingView.sh pokemon-sleep-test pokemon-sleep TestTestController Test create test 3 createPost



viewFileName=$1
viewFolderName=$2
controllerFileName=$3
controllerFolderName=$4
controllerMethodName=$5
routeFileName=$6
getHelperName=$viewFileName-$controllerMethodName


# 各コマンドでエラーが起きたとき、作成したファイルを削除したり、追加した文字列を削除して元の状態に戻します
source ./defineErrorHandler.sh
trap 'error_handler "$BASH_COMMAND" "$LINENO"' ERR



# ビューファイルを作成し、文字列を追加
./createViewFile.sh $viewFileName $viewFolderName
<<createViewFile
cd ../src
php artisan make:view $viewFolderName/$viewFileName
sed -i '' '3i\
    <h1>hello</h1>\
' resources/views/$viewFolderName/$viewFileName.blade.php
cd ../availableWatchingView
createViewFile



# コントローラーを作成し、該当するメソッド名にビューを返す文字列を追加
./createControllerFile.sh $controllerFileName $controllerFolderName
<<createControllerFile
cd ../src
php artisan make:controller $controllerFolderName/$controllerFileName -r
createControllerFile



./insertReturnIntoControllerMethod.sh $viewFileName $viewFolderName $controllerFileName $controllerFolderName $controllerMethodName
<<insertReturnIntoControllerMethod
cd ../src
sed -i '' '10i\
\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
if [ $controllerMethodName == "index" ]; then
    insertRowNumber=$(grep -n "public function index()" app/Http/Controllers/$controllerFolderName/$controllerFileName.php | cut -d : -f 1)
    insertRowNumber=$((insertRowNumber+3))
    echo "insertRowNumber"$insertRowNumber
    sed -i '' ''$insertRowNumber'i\
        return view('\'$viewFolderName'.'$viewFileName\'');\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
elif [ $controllerMethodName == "create" ]; then
    insertRowNumber=$(grep -n "public function create()" app/Http/Controllers/$controllerFolderName/$controllerFileName.php | cut -d : -f 1)
    insertRowNumber=$((insertRowNumber+3))
    echo "insertRowNumber"$insertRowNumber
    sed -i '' ''$insertRowNumber'i\
        return view('\'$viewFolderName'.'$viewFileName\'');\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
else
    insertRowNumber=$(wc -l < app/Http/Controllers/$controllerFolderName/$controllerFileName.php)
    echo "insertRowNumber"$insertRowNumber
    sed -i '' ''$insertRowNumber'i\
\
    public function '$controllerMethodName'(){\
        return view('\'$viewFolderName'.'$viewFileName\'');\
    }\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
fi
cd ../availableWatchingView
insertReturnIntoControllerMethod



# ルートファイルに該当するビューファイル名でアクセス可能にする文字列追加
grep -q 'use App\\Http\\Controllers\\'$controllerFolderName'\\'$controllerFileName';' ../src/routes/$routeFileName.php
hasUseStatement=$?
./judgeUseStatementAndInsertGetRoute.sh $viewFileName $controllerFileName $controllerFolderName $controllerMethodName $getHelperName $routeFileName $hasUseStatement
<<judgeUseStatementAndInsertGetRoute
if [ -n "$hasUseStatement" ] && [ $hasUseStatement == 0 ]; then
    sed -i '' '$a\
Route::get('\'$viewFileName\'', ['$controllerFileName'::class, '\'$controllerMethodName\''])\
->name('\'$getHelperName\'');\
' ../src/routes/$routeFileName.php
else
    sed -i '' '$a\
use App\\Http\\Controllers\\'$controllerFolderName'\\'$controllerFileName';\
Route::get('\'$viewFileName\'', ['$controllerFileName'::class, '\'$controllerMethodName\''])\
->name('\'$getHelperName\'');\
' ../src/routes/$routeFileName.php
fi
judgeUseStatementAndInsertGetRoute



# 該当ルートファイルに次回の追加に備えて改行追加
./insertNewLine.sh $routeFileName 3
<<insertNewLine
sed -i '' '$a\
\
\
\
' ../src/routes/$routeFileName.php
insertNewLine





user="user"
password="password"



view_file_name=$viewFileName.blade.php
route_url=$viewFileName
controller=$controllerFileName
get_method=$controllerMethodName
get_helper_name=$getHelperName
middleware=
post_method=
post_helper_name=
model=
table_name=

mysql -h 127.0.0.1 -P 3306 -u $user -p$password laravel --skip-column-names <<EOF
insert into preview_route_tests (view_file_name, route_url, controller, get_method,
get_helper_name, middleware, post_method, post_helper_name, model, table_name) 
values ("$view_file_name", "$route_url", "$controller", "$get_method", 
"$get_helper_name", "$middleware", "$post_method", "$post_helper_name", 
"$model", "$table_name");
EOF





inputElementNumber=$7
postMethod=$8
./insertInputElement.sh $viewFileName $viewFolderName $inputElementNumber $controllerFileName $controllerFolderName $postMethod $routeFileName



resultString=$(mysql -h 127.0.0.1 -P 3306 -u user -ppassword laravel --skip-column-names <<EOF
select route_url from preview_route_tests where route_url="$viewFileName";
EOF
)






# <<aaa
if [ -n "$resultString" ] && [ $resultString == "$viewFileName" ]; then
    mysql -h 127.0.0.1 -P 3306 -u user -ppassword laravel --skip-column-names <<EOF
update preview_route_tests set post_method="$postMethod" where route_url="$viewFileName";
update preview_route_tests set post_helper_name="$viewFileName-$postMethod" where route_url="$viewFileName";
EOF
fi
# aaa

