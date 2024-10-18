# ./startCreatingShowView.sh test-show2 test Test2Controller Test RegisterShellScript ShellScript test laravel register_shell_scripts user password



viewFileName=$1
viewFolderName=$2
controllerFileName=$3
controllerFolderName=$4
modelFileName=$5
modelFolderName=$6
routeFileName=$7
getHelperName=$viewFileName-show
databaseName=$8
tableName=$9
user=${10}
password=${11}

./createViewFile.sh $viewFileName $viewFolderName



./insertShowResult.sh $viewFileName $viewFolderName $databaseName $tableName $user $password



./insertControllerShowMethod.sh $viewFileName $viewFolderName $controllerFileName $controllerFolderName $modelFileName $modelFolderName



./insertRouteGet.sh $viewFileName $controllerFileName show $getHelperName $routeFileName



./insertNewLine.sh $routeFileName 3


