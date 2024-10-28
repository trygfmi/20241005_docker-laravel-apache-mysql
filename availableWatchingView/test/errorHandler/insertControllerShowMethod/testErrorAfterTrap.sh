# cd availableWatchingView/test/errorHandler/insertControllerShowMethod
# ./testErrorAfterTrap.sh



# insertControllerShowMethod errorHandler test availableWatchingView
cd ../../..



sed -i '' '7i\
false\
' insertControllerShowMethod.sh



./startCreatingShowView.sh test-show1000 test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3
sed -i '' '7d' insertControllerShowMethod.sh


