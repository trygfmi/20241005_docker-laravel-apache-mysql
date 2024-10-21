# ./testIfFileDoesntExist.sh



cd ..



sed -i '' 's/trap '\''error_handler "$LINENO" $(cat error_log1.txt); exit'\'' ERR //' startCreatingShowView.sh



sed -i '' '39i\
exit 1' startCreatingShowView.sh



./startCreatingShowView.sh test-sh test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3
sed -i '' 's/exit 1//' startCreatingShowView.sh



sleep 3
sed -i '' '9i\
trap '\''error_handler "$LINENO" $(cat error_log1.txt); exit'\'' ERR ' startCreatingShowView.sh

