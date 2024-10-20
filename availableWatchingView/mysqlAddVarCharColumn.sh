# ./mysqlAddVarCharColumn.sh laravel tests test1 user password



databaseName=$1
tableName=$2
newColumn=$3
user=$4
password=$5



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
alter table $tableName add column $newColumn varchar(255);
EOF
