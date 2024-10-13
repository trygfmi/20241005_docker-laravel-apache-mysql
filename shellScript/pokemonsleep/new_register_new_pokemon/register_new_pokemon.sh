# 該当日付フォルダを引数に指定して実行してください
# 実行例 ./register_new_pokemon.sh originFile.txt 20241013



# originFile.txtから抽出したデータを格納するフォルダが無ければ作成します
# today=$(date +%Y%m%d)
today=$2
# echo $today
if [ -d "$2" ]; then
    echo "フォルダは既に作成済み"
else
    echo "$2フォルダを作成"
    mkdir $2
fi



# シェルの引数からファイル名を代入
originFile=$1



# 読み込むファイルの末尾が改行でなければ、改行を挿入して全ての行を読めるようにします
last_char=$(tail -c 1 "$originFile")
if [ -n "$last_char" ] && [ "$last_char" != "\n" ]; then
    echo "読み込んだファイルの末尾に改行を追加しました"
    sed -i '' '$a\
\
' $originFile
fi



# foodlv1 foodlv30 foodlv60 template template2 main_skill template3 choice sub_skill personality ownpokemon
isSelectedSeeder=(true true true true true false true true false false false)
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

    elif [ ${array[0]} == "main_skill" ]; then
        echo "${array[1]} ${array[2]} " >> $today/main_skill_data.txt

        if [ "${isSelectedSeeder[5]}" == false ]; then
            isSelectedSeeder[5]=true
        fi
    fi


done < $originFile



echo ${isSelectedSeeder[@]}
./enable_selected_seeder.sh ${isSelectedSeeder[@]}



sleep 3


sed -i '' 's|DB_HOST=laravel_db2|# DB_HOST=laravel_db2|g' ../../../src/.env
sed -i '' 's|# DB_HOST=127.0.0.1|DB_HOST=127.0.0.1|g' ../../../src/.env



# 参照したデータファイルを利用してseederファイルに書き込んで、ウェブ上で利用できるよう反映します
# <<test
./input_food_lv1_file.sh  $2/food_lv1_data.txt $2
./input_food_lv30_file.sh $2/food_lv30_data.txt $2
./input_food_lv60_file.sh $2/food_lv60_data.txt $2
./input_create_pokemon_template_file.sh $2/create_pokemon_template_data.txt $2
./input_create_pokemon_template2_file.sh $2/create_pokemon_template2_data.txt $2
if [ ${isSelectedSeeder[5]} == true ]; then
    ./input_main_skill_file.sh $2/main_skill_data.txt $2
fi
./input_create_pokemon_template3_file.sh $2/create_pokemon_template3_data.txt $2
./input_choice_pokemon_constrained_file.sh $2/choice_pokemon_constrained_data.txt $2
# test



sed -i '' 's|# DB_HOST=laravel_db2|DB_HOST=laravel_db2|g' ../../../src/.env
sed -i '' 's|DB_HOST=127.0.0.1|# DB_HOST=127.0.0.1|g' ../../../src/.env



./disable_selected_seeder.sh ${isSelectedSeeder[@]}


