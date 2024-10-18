# ./insertUseStatementAndGetRoute.sh pokemon-sleep-test TestTestController Test create pokemon-sleep-test-create test



viewFileName=$1
controllerFileName=$2
controllerFolderName=$3
controllerMethodName=$4
getHelperName=$5
routeFileName=$6



sed -i '' '$a\
use App\\Http\\Controllers\\'$controllerFolderName'\\'$controllerFileName';\
Route::get('\'$viewFileName\'', ['$controllerFileName'::class, '\'$controllerMethodName\''])\
->name('\'$getHelperName\'');\
' ../src/routes/$routeFileName.php
