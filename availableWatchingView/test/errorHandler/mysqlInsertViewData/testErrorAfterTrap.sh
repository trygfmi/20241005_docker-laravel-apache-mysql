# cd availableWatchingView/test/errorHandler/mysqlInsertViewData
# ./testErrorAfterTrap.sh



cd ../../..



sed -i '' '6i\
false\
' mysqlInsertViewData.sh



sed -i '' '52i\
    exit 1\
' errorInStartCreatingShowView.sh


./startCreatingShowView.sh test-show1000 test Test2Controller Test OwnPokemonComplete PokemonSleep test laravel preview_route_tests user password own_pokemon_completes



sleep 3



sed -i '' '52d' errorInStartCreatingShowView.sh



sed -i '' '6d' mysqlInsertViewData.sh


