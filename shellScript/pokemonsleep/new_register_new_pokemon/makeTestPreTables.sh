# ./mysqlAddVarCharColumn.sh laravel tests test1 user password



source ./errorTest.sh




# echo "outputFoodlv1DataIntoSeeder.sh"
# false



databaseName=$1
user=$2
password=$3
today=$4



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_foodlv1s like foodlv1s;
EOF
trap 'error_handler_foodlv1 "makeTestPreTables.sh" "test_foodlv1s"; exit 1' ERR


 
mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_foodlv30s like foodlv30s;
EOF
trap 'error_handler_foodlv30 "makeTestPreTables.sh" "test_foodlv30s"; exit 1' ERR



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_foodlv60s like foodlv60s;
EOF
trap 'error_handler_foodlv60 "makeTestPreTables.sh" "test_foodlv60s"; exit 1' ERR



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_create_pokemon_templates like create_pokemon_templates;
EOF
trap 'error_handler_create_pokemon_template "makeTestPreTables.sh" "test_create_pokemon_templates"; exit 1' ERR



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_create_pokemon_template2s like create_pokemon_template2s;
EOF
trap 'error_handler_create_pokemon_template2 "makeTestPreTables.sh" "test_create_pokemon_template2s"; exit 1' ERR



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_create_pokemon_template3s like create_pokemon_template3s;
EOF
trap 'error_handler_create_pokemon_template3 "makeTestPreTables.sh" "test_create_pokemon_template3s"; exit 1' ERR



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_choice_pokemon_constraineds like choice_pokemon_constraineds;
EOF
trap 'error_handler_choice_pokemon_constrained "makeTestPreTables.sh" "test_choice_pokemon_constraineds"; exit 1' ERR



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_main_skills like main_skills;
EOF
trap 'error_handler_main_skill "makeTestPreTables.sh" "test_main_skills"; exit 1' ERR



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_personalities like personalities;
EOF
trap 'error_handler_personality "makeTestPreTables.sh" "test_personalities"; exit 1' ERR



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
create table test_sub_skills like sub_skills;
EOF
trap 'error_handler_sub_skill "makeTestPreTables.sh" "test_sub_skills"; exit 1' ERR


