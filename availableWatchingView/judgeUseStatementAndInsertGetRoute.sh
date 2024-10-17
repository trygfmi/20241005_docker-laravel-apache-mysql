# ./judgeUseStatementAndInsertGetRoute.sh test TestTestController Test testtest test-testtest test 1



viewFileName=$1
controllerFileName=$2
controllerFolderName=$3
controllerMethodName=$4
getHelperName=$5
routeFileName=$6
hasUseStatement=$7



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