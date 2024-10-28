# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertControllerShowMethod
# ./testUnitInsertControllerShowMethod_true.sh



cd ../../../..



controllerFileName=Test2Controller
controllerFolderName=Test
modelFileName=OwnPokemonComplete
modelFolderName=PokemonSleep
controllerMethodName=testshow1000Show



for i in $(seq 3); do
    sed -i '' '8i\
\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
done



hasUseStatement=0
if  grep -q 'use App\\Models\\'$modelFolderName'\\'$modelFileName';' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php; then
    echo "use文が存在"
else
    sed -i '' '8i\
use App\\Models\\'$modelFolderName'\\'$modelFileName';\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    hasUseStatement=1
fi



./insertControllerShowMethod.sh test-show1000 test $controllerFileName $controllerFolderName $modelFileName $modelFolderName $controllerMethodName



sleep 3



if [ $hasUseStatement == 0 ]; then
    echo "use文が存在"
    for i in $(seq 3); do
        sed -i '' '8d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    done
else
    for i in $(seq 4); do
        sed -i '' '8d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    done
fi



sed -i '' '/public function '$controllerMethodName'(){/,/}/d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
insertRowNumber=$(($(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)-1))
sed -i '' ''$insertRowNumber'd' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php


