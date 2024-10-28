# cd availableWatchingView/test/errorHandler/insertControllerShowMethod/If
# ./testErrorGrepTrue.sh



cd ../../../..



controllerFileName="Test2Controller"
controllerFolderName="Test"
modelFileName="OwnPokemonComplete"
modelFolderName="PokemonSleep"



# sed -i '' 's/use App\\Models\\'$modelFolderName'\\'$modelFileName';//' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php



sed -i '' '26i\
    false\
' insertControllerShowMethod.sh



./startCreatingShowView.sh test-show1000 test $controllerFileName $controllerFolderName $modelFileName $modelFolderName test laravel preview_route_tests user password own_pokemon_completes



sleep 3
sed -i '' '26d' insertControllerShowMethod.sh


