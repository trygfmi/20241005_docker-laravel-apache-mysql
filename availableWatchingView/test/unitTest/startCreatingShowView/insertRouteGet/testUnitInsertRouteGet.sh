# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertRouteGet
# ./testUnitInsertRouteGet.sh



cd ../../../..



viewFileName=test-show1000
controllerFileName=Test2Controller
controllerMethodName=testshow1000Show
getHelperName=test-show1000-show
routeFileName=test



./insertRouteGet.sh $viewFileName $controllerFileName $controllerMethodName $getHelperName $routeFileName



sleep 3



sed -i '' '/Route::get('\'$viewFileName\'', \['$controllerFileName'::class, '\'$controllerMethodName\''\])/,/->name('\'$getHelperName\'');/d' ../src/routes/$routeFileName.php


