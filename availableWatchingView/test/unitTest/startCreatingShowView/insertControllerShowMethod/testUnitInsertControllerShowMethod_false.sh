# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertControllerShowMethod
# ./testUnitInsertControllerShowMethod_false.sh



cd ../../../..



controllerFileName=Test2Controller
controllerFolderName=Test
modelFileName=OwnPokemonComplete
modelFolderName=PokemonSleep
controllerMethodName=testshow1000Show



for i in $(seq 4); do
    sed -i '' '8d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
done



sed -i '' '27i\
    sleep 3\
' insertControllerShowMethod.sh



sed -i '' '36i\
exit 1\
' insertControllerShowMethod.sh



./insertControllerShowMethod.sh test-show1000 test $controllerFileName $controllerFolderName $modelFileName $modelFolderName $controllerMethodName



sleep 3



sed -i '' '36d' insertControllerShowMethod.sh



sed -i '' '27d' insertControllerShowMethod.sh



sed -i '' '/public function '$controllerMethodName'(){/,/}/d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
insertRowNumber=$(($(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)-1))
sed -i '' ''$insertRowNumber'd' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php



if  grep -q 'use App\\Models\\'$modelFolderName'\\'$modelFileName';' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php; then
    echo "use文が存在"
else
    for i in $(seq 3); do
    sed -i '' '8i\
\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
done
    sed -i '' '8i\
use App\\Models\\'$modelFolderName'\\'$modelFileName';\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    hasUseStatement=1
fi

