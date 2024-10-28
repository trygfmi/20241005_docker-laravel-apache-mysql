# ./testErrorLine58.sh



cd ../../..



sed -i '' '58i\
false\
' insertShowResult.sh



./startCreatingShowView.sh test-show1000 test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3
sed -i '' '58d' insertShowResult.sh


