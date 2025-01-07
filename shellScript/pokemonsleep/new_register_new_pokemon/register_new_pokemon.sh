# 該当日付フォルダを引数に指定して実行してください
# 実行例 ./register_new_pokemon.sh originFile.txt 20241013



# エラーが起きた時に参照するファイルを宣言
source ./errorTest.sh
# trap '参照するメソッド 引数; 終了後の処理' トラップの種類
trap 'error_handler $today; exit 1' ERR 



# originFile.txtから抽出したデータを格納するフォルダが無ければ作成します
# today=$(date +%Y%m%d)
today=$2
# echo $today
if [ -d "$today" ]; then
    echo "フォルダは既に作成済み"
else
    echo $today"フォルダを作成"
    mkdir $today
    mkdir $today/insertDataToSeeder
fi



# シェルの引数からファイル名を取得
originFile=$1



# 読み込むファイルの末尾が改行でなければ、改行を挿入して全ての行を読めるようにします
last_char=$(tail -c 1 "$originFile")
if [ -n "$last_char" ] && [ "$last_char" != "\n" ]; then
    insertNewLineAtLastRow.sh $originFile
fi



# foodlv1 foodlv30 foodlv60 template template2 main_skill template3 choice sub_skill personality ownpokemon
isSelectedSeeder=(false false false false false false false false false false false)
isPokemonSelected=false
isMainSkillSelected=false

# 読み込んだファイルから1行ずつ読み出して、参照するデータをファイルに書き込みます
while read line; do
    array=($line)
    # echo ${array[0]}

    if [ ${array[0]} == "pokemon" ]; then
        echo "${array[1]} ${array[2]} ${array[1]} ${array[1]} ${array[1]}" >> $today/choice_pokemon_constrained_data.txt
        echo "${array[1]} ${array[1]} " >> $today/create_pokemon_template_data.txt
        echo "${array[1]} ${array[1]} ${array[1]} ${array[1]}" >> $today/create_pokemon_template2_data.txt
        echo "${array[1]} ${array[1]} ${array[1]} ${array[1]} ${array[6]}" >> $today/create_pokemon_template3_data.txt
        echo "${array[1]} ${array[3]} " >> $today/food_lv1_data.txt
        echo "${array[1]} ${array[3]} ${array[4]}" >> $today/food_lv30_data.txt
        echo "${array[1]} ${array[3]} ${array[4]} ${array[5]}" >> $today/food_lv60_data.txt

        if [ $isPokemonSelected == false ]; then
            isSelectedSeeder[0]=true
            isSelectedSeeder[1]=true
            isSelectedSeeder[2]=true
            isSelectedSeeder[3]=true
            isSelectedSeeder[4]=true
            isSelectedSeeder[6]=true
            isSelectedSeeder[7]=true

            isPokemonSelected=true
        fi

    elif [ ${array[0]} == "main_skill" ]; then
        echo "${array[1]} ${array[2]} " >> $today/main_skill_data.txt

        if [ $isMainSkillSelected == false ]; then
            isSelectedSeeder[5]=true

            isMainSkillSelected=true
        fi
    fi


done < $originFile



echo ${isSelectedSeeder[@]}




# 引数のデータファイルを利用して、seederファイルに書き込むための文字列を生成します
# <<test
./input_food_lv1_file.sh  $today/food_lv1_data.txt $today
./input_food_lv30_file.sh $today/food_lv30_data.txt $today
./input_food_lv60_file.sh $today/food_lv60_data.txt $today
./input_create_pokemon_template_file.sh $today/create_pokemon_template_data.txt $today
./input_create_pokemon_template2_file.sh $today/create_pokemon_template2_data.txt $today
if [ ${isSelectedSeeder[5]} == true ]; then
    ./input_main_skill_file.sh $today/main_skill_data.txt $today
fi
./input_create_pokemon_template3_file.sh $today/create_pokemon_template3_data.txt $today
./input_choice_pokemon_constrained_file.sh $today/choice_pokemon_constrained_data.txt $today
# test



databaseName=laravel
user=user
password=password

./makeTestPreTables.sh $databaseName $user $password $today
trap 'error_handler_after_makeTestPreTables "register_new_pokemon.sh" "after_makeTestPreTables.sh"; exit 1' ERR
./makeTestPreTablesSeeder.sh
trap 'error_handler_after_makeTestPreTablesSeeder "register_new_pokemon.sh" "after_makeTestPreTablesSeeder.sh"; exit 1' ERR
./insertTestPreTablesSeeder.sh $today ${isSelectedSeeder[@]}
./insertTestPreTables.sh
./deleteTestPreTablesSeeder.sh
./dropTestPreTables.sh



./enable_selected_seeder.sh ${isSelectedSeeder[@]}
trap 'error_handler_after_enable_selected_seeder "register_new_pokemon.sh" "enable_selected_seeder.sh"; exit 1' ERR



sed -i '' 's|DB_HOST=laravel_db2|# DB_HOST=laravel_db2|g' ../../../src/.env
sed -i '' 's|# DB_HOST=127.0.0.1|DB_HOST=127.0.0.1|g' ../../../src/.env



# テストテーブルで検証したので、エラーが発生しない
./outputFoodlv1DataIntoSeeder.sh $today/insertDataToSeeder/foodlv1.txt $today
trap 'error_handler_after_outputFoodlv1 "register_new_pokemon.sh" "outputFoodlv1"; exit 1' ERR
./outputFoodlv30DataIntoSeeder.sh $today/insertDataToSeeder/foodlv30.txt $today
false
exit 1



sed -i '' 's|# DB_HOST=laravel_db2|DB_HOST=laravel_db2|g' ../../../src/.env
sed -i '' 's|DB_HOST=127.0.0.1|# DB_HOST=127.0.0.1|g' ../../../src/.env



./disable_selected_seeder.sh ${isSelectedSeeder[@]}


