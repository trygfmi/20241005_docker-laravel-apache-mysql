# ./insertGetRoute.sh pokemon-sleep-test TestTestController create pokemon-sleep-test-create test



viewFileName=$1
controllerFileName=$2
controllerMethodName=$3
getHelperName=$4
routeFileName=$5



sed -i '' '$a\
Route::get('\'$viewFileName\'', ['$controllerFileName'::class, '\'$controllerMethodName\''])\
->name('\'$getHelperName\'');\
' ../src/routes/$routeFileName.php
