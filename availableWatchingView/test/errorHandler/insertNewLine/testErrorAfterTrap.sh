# cd availableWatchingView/test/errorHandler/insertNewLine
# ./testErrorAfterTrap.sh



cd ../../..



sed -i '' '6i\
false\
' insertNewLine.sh



./startCreatingShowView.sh test-show1000 test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3



sed -i '' '6d' insertNewLine.sh


