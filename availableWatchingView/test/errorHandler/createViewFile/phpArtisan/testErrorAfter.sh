# ./testErrorAfter.sh



# createViewFile errorHandler test availableWatchingView
cd ../../../..



sed -i '' '20i\
false\
' createViewFile.sh



./startCreatingShowView.sh test-show12 test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3
sed -i '' '20d' createViewFile.sh


