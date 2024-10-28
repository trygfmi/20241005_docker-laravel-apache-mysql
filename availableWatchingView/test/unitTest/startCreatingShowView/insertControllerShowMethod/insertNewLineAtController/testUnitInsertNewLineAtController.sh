# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertControllerShowMethod/insertNewLineAtController
# ./testUnitInsertNewLineAtController.sh



cd ../../../../..



controllerFileName=Test2Controller
controllerFolderName=Test



./insertNewLineAtController.sh 3 8 $controllerFileName $controllerFolderName



sleep 3



for i in $(seq 3); do
    sed -i '' '8d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
done



