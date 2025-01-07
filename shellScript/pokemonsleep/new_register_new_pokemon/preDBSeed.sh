# ./mysqlAddVarCharColumn.sh laravel tests test1 user password



source ./errorTest.sh
trap 'error_handler "preDBSeed"; exit 1' ERR 



# echo "outputFoodlv1DataIntoSeeder.sh"
# false



# databaseName=$1
# tableName=$2
# newColumn=$3
# user=$4
# password=$5
databaseName=laravel
tableName=foodlv1s
user=user
password=password



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_foodlv1s like foodlv1s;
EOF

# mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
# drop table test_foodlv1s;
# EOF



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_foodlv30s like foodlv30s;
EOF



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_foodlv60s like foodlv60s;
EOF



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_create_pokemon_templates like create_pokemon_templates;
EOF



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_create_pokemon_template2s like create_pokemon_template2s;
EOF



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_create_pokemon_template3s like create_pokemon_template3s;
EOF



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_main_skills like main_skills;
EOF



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_personalities like personalities;
EOF



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_sub_skills like sub_skills;
EOF



