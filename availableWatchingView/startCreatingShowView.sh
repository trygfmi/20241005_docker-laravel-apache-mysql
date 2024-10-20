# ./startCreatingShowView.sh test-show4 test Test2Controller Test PreviewRouteTest Preview test laravel preview_route_tests user password preview_route_tests
# ./startCreatingShowView.sh test-show5 test Test2Controller Test Foodlv60 PokemonSleep test laravel preview_route_tests user password foodlv60s;
# ./startCreatingShowView.sh test-show7 test Test2Controller Test Personality PokemonSleep test laravel preview_route_tests user password personalities



source ./errorInStartCreatingShowView.sh
trap 'error_handler "$LINENO" $(cat error_log1.txt)' ERR 
# trap 'rm -f error_log1.txt' EXIT



viewFileName=$1
viewFolderName=$2
controllerFileName=$3
controllerFolderName=$4
modelFileName=$5
modelFolderName=$6
routeFileName=$7
getHelperName=$viewFileName-show
databaseName=$8
previewRouteTableName=$9
user=${10}
password=${11}
showTableName=${12}
# $viewFileNameからハイフンを取り除いてShowと結合
controllerMethodName=$(echo $viewFileName | tr -d '-')Show



./createViewFile.sh $viewFileName $viewFolderName



./insertShowResult.sh $viewFileName $viewFolderName $databaseName $showTableName $user $password



./insertControllerShowMethod.sh $viewFileName $viewFolderName $controllerFileName $controllerFolderName $modelFileName $modelFolderName $controllerMethodName



./insertRouteGet.sh $viewFileName $controllerFileName $controllerMethodName $getHelperName $routeFileName



./insertNewLine.sh $routeFileName 3



./mysqlInsertViewData.sh $databaseName $previewRouteTableName $user $password $viewFileName $viewFileName $controllerFileName $controllerMethodName $getHelperName "" "" "" $previewRouteTableName $modelFileName



