# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertControllerShowMethod/insertUseStatementAtController
# ./testUnitInsertUseStatementAtController.sh



cd ../../../../..



insertRowNumber=8
modelFileName=OwnPokemonComplete
modelFolderName=PokemonSleep
controllerFileName=Test2Controller
controllerFolderName=Test



./insertUseStatementAtController.sh $insertRowNumber $modelFileName $modelFolderName $controllerFileName $controllerFolderName



sleep 3



sed -i '' '8d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php



