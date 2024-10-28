# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertShowResult/mysqlGetTableColumns
# ./testUnitTrap.sh



cd ../../../../..



sed -i '' '6i\
false\
' mysqlGetTableColumns.sh



./mysqlGetTableColumns.sh laravel preview_route_tests user password



sleep 3



rm -f "error_log2_insertShowResult.txt"



sed -i '' '6d' mysqlGetTableColumns.sh


