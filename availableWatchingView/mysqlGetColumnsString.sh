# ./mysqlGetRouteUrl.sh pokemon-sleep-test



databaseName=$1
tableName=$2
user=$3
password=$4



result=$(./mysqlGetTableColumns.sh $databaseName $tableName $user $password)



array=($result)



stringColumns=



countColumns=0
for column in ${array[@]}; do
    if [ $countColumns == $((${#array[@]}-1)) ]; then
        stringColumns=$stringColumns""$column
        break
    fi
    stringColumns=$stringColumns""$column", "
    countColumns=$(($countColumns+1))
done



echo "$stringColumns"