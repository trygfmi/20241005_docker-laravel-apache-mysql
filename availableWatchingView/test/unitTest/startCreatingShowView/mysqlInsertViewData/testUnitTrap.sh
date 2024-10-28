# cd availableWatchingView/test/UnitTest/startCreatingShowView/mysqlInsertViewData
# ./testUnitTrap.sh



cd ../../../..



databaseName=laravel
tableName=preview_route_tests
user=user
password=password

view_file_name=test-show1000
route_url=test-show1000
controller=Test2Controller
get_method=testshow1000Show
get_helper_name=test-show1000-show
middleware=
post_method=
post_helper_name=
table_name=own_pokemon_completes
model=OwnPokemonComplete



sed -i '' '6i\
false\
' mysqlInsertViewData.sh



./mysqlInsertViewData.sh $databaseName $table_name $user $password $view_file_name $viewFileName $controller $get_method $get_helper_name "" "" "" $table_name $model



sleep 3



rm -f error_log1.txt



sed -i '' '6d' mysqlInsertViewData.sh


