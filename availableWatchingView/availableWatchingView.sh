# $1:viewのファイル名 $2:viewのフォルダ名 $3:controllerのファイル名 $4:controllerのフォルダ名
# $5:controllerのメソッド名 $6:routeのファイル名
# 実行例：./availableWatchingView.sh test pokemon-sleep TestController PokemonSleep create pokemonSleep



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
cd ../src
php artisan make:view $viewFolderName/$viewFileName
sed -i '' '3i\
    <h1>hello</h1>\
' resources/views/$viewFolderName/$viewFileName.blade.php
cd ../availableWatchingView



# コントローラーを作成し、該当するメソッド名にビューを返す文字列を追加
cd ../src
php artisan make:controller $controllerFolderName/$controllerFileName -r
sed -i '' '10i\
\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
if [ $controllerMethodName == "index" ]; then
    insertRowNumber=$(grep -n "public function index()" app/Http/Controllers/$controllerFolderName/$controllerFileName.php | cut -d : -f 1)
    insertRowNumber=$((insertRowNumber+3))
    echo $insertRowNumber
    sed -i '' ''$insertRowNumber'i\
        return view('\'$viewFolderName'.'$viewFileName\'');\
    ' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
elif [ $controllerMethodName == "create" ]; then
    insertRowNumber=$(grep -n "public function create()" app/Http/Controllers/$controllerFolderName/$controllerFileName.php | cut -d : -f 1)
    insertRowNumber=$((insertRowNumber+3))
    echo $insertRowNumber
    sed -i '' ''$insertRowNumber'i\
        return view('\'$viewFolderName'.'$viewFileName\'');\
    ' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
fi
cd ../availableWatchingView



# ルートファイルに該当するビューファイル名でアクセス可能にする文字列追加
if grep -q 'use App\\Http\\Controllers\\'$controllerFolderName'\\'$controllerFileName';' ../src/routes/$routeFileName.php; then
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



# 該当ルートファイルに次回の追加に備えて改行追加
sed -i '' '$a\
\
\
\
' ../src/routes/$routeFileName.php






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