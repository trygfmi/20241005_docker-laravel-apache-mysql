# ./mysqlGetTableColumns.sh laravel preview_route_tests user password



databaseName=$1
tableName=$2
user=$3
password=$4


mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName --skip-column-names <<EOF
select column_name from information_schema.columns where table_schema="$databaseName" and table_name="$tableName" and column_name!="created_at" and column_name!="updated_at" order by ordinal_position;
EOF

# select column_name from information_schema.columns where table_schema="$databaseName" and table_name="$tableName" and column_name!="created_at" and column_name!="updated_at" and column_name!="id" order by ordinal_position;
