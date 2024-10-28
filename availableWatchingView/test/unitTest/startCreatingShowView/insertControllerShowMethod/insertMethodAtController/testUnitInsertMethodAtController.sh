# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertControllerShowMethod/insertMethodAtController
# ./testUnitInsertMethodAtController.sh



cd ../../../../..



viewFileName=test-show1000
viewFolderName=test
controllerFileName=Test2Controller
controllerFolderName=Test
modelFileName=OwnPokemonComplete
modelFolderName=PokemonSleep
controllerMethodName=testshow1000Show
insertRowNumber=$(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)



./insertMethodAtController.sh $viewFileName $viewFolderName $controllerFileName $controllerFolderName $modelFileName $modelFolderName $controllerMethodName $insertRowNumber



sleep 3



sed -i '' '/public function '$controllerMethodName'(){/,/}/d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php



insertRowNumber=$(($(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)-1))
            sed -i '' ''$insertRowNumber'd' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php

            
