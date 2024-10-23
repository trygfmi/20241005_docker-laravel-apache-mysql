# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertRouteGet
# ./testUnitTrap.sh



cd ../../../..



viewFileName=test-show1000
controllerFileName=Test2Controller
controllerFolderName=Test
getHelperName=testshow1000Show
routeFileName=test



sed -i '' '6i\
false\
' insertRouteGet.sh



./insertRouteGet.sh $viewFileName $controllerFileName $controllerFolderName $getHelperName $routeFileName



sleep 3



rm -f error_log1.txt



sed -i '' '/Route::get('\'$viewFileName\'', ['$controllerFileName'::class, '\'$controllerMethodName\''])/,/->name('\'$getHelperName\'');/d' ../src/routes/$routeFileName.php



sed -i '' '6d' insertRouteGet.sh


