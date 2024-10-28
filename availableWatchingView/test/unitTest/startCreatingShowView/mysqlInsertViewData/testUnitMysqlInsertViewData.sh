# cd availableWatchingView/test/UnitTest/startCreatingShowView/mysqlInsertViewData
# ./testUnitMysqlInsertViewData.sh



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



./mysqlInsertViewData.sh $databaseName $tableName $user $password $view_file_name $view_file_name $controller $get_method $get_helper_name "" "" "" $table_name $model



sleep 5



rm -f error_log1.txt



insertedTestViewId=$(mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName --skip-column-names <<EOF
select id from $tableName where get_method="$get_method";
EOF
)



echo $insertedTestViewId



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
delete from $tableName 
where id=$insertedTestViewId
EOF


