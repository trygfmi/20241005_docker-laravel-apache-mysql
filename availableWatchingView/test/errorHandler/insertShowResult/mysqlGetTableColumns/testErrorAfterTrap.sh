# cd availableWatchingView/test/errorHandler/insertShowResult/mysqlGetTableColumns
# ./testErrorLine19.sh



cd ../../../..



sed -i '' '6i\
false\
' mysqlGetTableColumns.sh



./startCreatingShowView.sh test-show1000 test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3
sed -i '' '6d' mysqlGetTableColumns.sh


