# ./mysqlTest.sh laravel register_shell_scripts user password



databaseName=$1
tableName=$2
user=$3
password=$4


mysql -h 127.0.0.1 -P 3306 -u $user -p$password laravel --skip-column-names <<EOF
select column_name from information_schema.columns where table_schema="$databaseName" and table_name="$tableName";
EOF
