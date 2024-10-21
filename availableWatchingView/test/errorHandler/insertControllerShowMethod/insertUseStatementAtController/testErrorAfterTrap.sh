# ./testErrorLine19.sh



cd ../../../..



controllerFileName="Test2Controller"
controllerFolderName="Test"
modelFileName="OwnPokemonComplete"
modelFolderName="PokemonSleep"



sed -i '' 's/use App\\Models\\'$modelFolderName'\\'$modelFileName';//' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php



for i in $(seq 4); do
    sed -i '' '8d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
done



sed -i '' '6i\
false\
' insertUseStatementAtController.sh



./startCreatingShowView.sh test-show12 test $controllerFileName $controllerFolderName $modelFileName $modelFolderName test laravel preview_route_tests user password own_pokemon_completes



for i in $(seq 4); do
    sed -i '' '8i\
\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
done



sed -i '' '8i\
use App\\Models\\'$modelFolderName'\\'$modelFileName';' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php



sed -i '' '6d' insertUseStatementAtController.sh


