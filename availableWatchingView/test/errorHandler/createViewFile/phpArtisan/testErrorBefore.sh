# cd availableWatchingView/test/errorHandler/createViewFile/phpArtisan
# ./testErrorBefore.sh



# createViewFile errorHandler test availableWatchingView
cd ../../../..



sed -i '' '13i\
false\
' createViewFile.sh



./startCreatingShowView.sh test-show1000 test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3
sed -i '' '13d' createViewFile.sh


