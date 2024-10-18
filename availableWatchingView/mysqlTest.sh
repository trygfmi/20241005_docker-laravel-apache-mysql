# ./mysqlGetRouteUrl.sh pokemon-sleep-test



databaseName=$1
tableName=$2
user=$3
password=$4


mysql -h 127.0.0.1 -P 3306 -u $user -p$password laravel --skip-column-names <<EOF
select column_name from information_schema.columns where table_schema="laravel" and table_name="register_shell_scripts";
EOF
