# ./mysqlGetColumnsValueString.sh laravel users user password



databaseName=$1
tableName=$2
user=$3
password=$4



result=$(./mysqlGetTableColumns.sh $databaseName $tableName $user $password)



array=($result)



stringValues=



countValues=0
for column in ${array[@]}; do
    if [ $countValues == $((${#array[@]}-1)) ]; then
        stringValues=$stringValues"$column"
        # stringValues=$stringValues'"$'$column'"'
        break
    fi
    stringValues=$stringValues"$column "
    # stringValues=$stringValues'"$'$column'", '
    countValues=$(($countValues+1))
done



echo "$stringValues"