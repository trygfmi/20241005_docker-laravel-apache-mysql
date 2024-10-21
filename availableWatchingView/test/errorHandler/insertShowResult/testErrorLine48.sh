# ./testErrorLine48.sh



cd ../../..



sed -i '' '48i\
false\
' insertShowResult.sh



./startCreatingShowView.sh test-show12 test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3
sed -i '' '48d' insertShowResult.sh


