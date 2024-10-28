# $1:viewのファイル名 $2:viewのフォルダ名 $3:controllerのファイル名 $4:controllerのフォルダ名
# $5:controllerのメソッド名 $6:routeのファイル名
# 実行例：./startCreatingView.sh pokemon-sleep-test2 pokemon-sleep TestTestController Test create2 test 4 createPost2 preview_route_tests



viewFolderName=$2
viewFileName=$1-$viewFolderName
controllerFileName=$3
controllerFolderName=$4
controllerMethodName=$5
getHelperName=$viewFileName-$controllerMethodName
routeFileName=$6
inputElementNumber=$7
postMethod=$8
postHelperName=$viewFileName-$postMethod
previewTableName=$9



# 各コマンドでエラーが起きたとき、作成したファイルを削除したり、追加した文字列を削除して元の状態に戻します
source ./errorInStartCreatingView.sh
# trap 'error_handler "$LINENO"' ERR



# ビューファイルを作成し、文字列を追加
./createViewFile.sh "$viewFileName" "$viewFolderName"



# コントローラーを作成し、該当するメソッド名にビューを返す文字列を追加
./createControllerFile.sh "$controllerFileName" "$controllerFolderName"



# 指定したメソッド名に指定したビューファイルを返す文字列を追加
./insertControllerReturnViewMethod.sh "$viewFileName" "$viewFolderName" "$controllerFileName" "$controllerFolderName" "$controllerMethodName"



# ルートファイルに該当するビューファイル名でアクセス可能にする文字列追加
grep -q 'use App\\Http\\Controllers\\'$controllerFolderName'\\'$controllerFileName';' ../src/routes/$routeFileName.php
hasUseStatement=$?
if [ -n "$hasUseStatement" ] && [ $hasUseStatement == 0 ]; then
    ./insertRouteGet.sh "$viewFileName" "$controllerFileName" "$controllerMethodName" "$getHelperName" "$routeFileName"
else
    ./insertUseStatementAndGetRoute.sh "$viewFileName" "$controllerFileName" "$controllerFolderName" "$controllerMethodName" "$getHelperName" "$routeFileName"
fi



# 該当ルートファイルに次回の追加に備えて改行追加
./insertNewLine.sh "$routeFileName" 3



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
user="user"
password="password"



# 引数に指定した数だけinput要素をtype,name属性を付与して、フォームをボタンで送信できる文字列を追加
./insertInputElement.sh "$viewFileName" "$viewFolderName" "$inputElementNumber" "$controllerFileName" "$controllerFolderName" "$postMethod" "$postHelperName" "$routeFileName"



# プレビュー画面に表示するためのデータをテーブルに格納
./mysqlInsertWatchingViewData.sh "$view_file_name" "$route_url" "$controller" "$get_method" "$get_helper_name" "$middleware" "$post_method" "$post_helper_name" "$model" "$table_name" "$previewTableName" "$user" "$password"



# 指定したビューファイルが存在した場合、ビューファイル名を取得
resultString=$(./mysqlGetRouteUrl.sh "$viewFileName" "$previewTableName" "$user" "$password")



if [ -n "$resultString" ] && [ $resultString == "$viewFileName" ]; then
    # 指定したビューファイル名の行に、post関連のデータをテーブルに格納
    ./mysqlUpdateColumnPost.sh "$viewFileName" "$postMethod" "$previewTableName" "$user" "$password"
else
    echo "該当するビューファイルが見つからなかったので、post_methodとpost_helper_nameをテーブルに追加できませんでした"
fi
