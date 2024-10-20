# ./mysqlInsertViewData.sh laravel preview_route_tests user password test-show test-show Test2Controller show test-show-show "" "" "" "" "" preview_route_tests PreviewRouteTest


databaseName=$1
tableName=$2
user=$3
password=$4

view_file_name=$5
route_url=$6
controller=$7
get_method=$8
get_helper_name=$9
middleware=${10}
post_method=${11}
post_helper_name=${12}
table_name=${13}
model=${14}



columnsString=$(./mysqlGetColumnsString.sh $databaseName $tableName $user $password)
# echo $columnsString



columnsValueString=$(./mysqlGetColumnsValueString.sh $databaseName $tableName $user $password)
# echo $columnsValueString



array=($columnsValueString)
developColumnsValueString=
countValuesArray=0
for column in ${array[@]}; do
    if [ $countValuesArray == $((${#array[@]}-1)) ]; then
        developColumnsValueString=$developColumnsValueString"'${!column}'"
        break
    fi
    developColumnsValueString=$developColumnsValueString"'${!column}', "
    countValuesArray=$(($countValuesArray+1))
done
# echo $developColumnsValueString
# exit



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
insert into $tableName ($columnsString) values ($developColumnsValueString);
EOF


