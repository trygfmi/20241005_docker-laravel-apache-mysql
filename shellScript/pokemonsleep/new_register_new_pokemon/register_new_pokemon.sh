# 該当日付フォルダを引数に指定して実行してください
# 実行例 ./register_new_pokemon.sh originFile.txt 20241013



# エラーが起きた時に参照するファイルを宣言
source ./errorTest.sh
# trap '参照するメソッド 引数; 終了後の処理' トラップの種類
trap 'error_handler $today; exit 1' ERR 



# シェルの引数から追加するデータが含まれるファイル名を取得
originFile=$1

# シェルの引数から処理を実行した日付を取得
# today=$(date +%Y%m%d)
today=$2
# echo $today



# originFile.txtから抽出したデータを格納するフォルダが無ければ作成します
./makeWorkingAndDataDirectory.sh $today



# 追加するデータが含まれるファイルの最後の行に空行がないと、最後のデータが読み込まれないので、最後に空行を追加します
./addNewLineIfLastCharIsNotEmptyLine.sh $originFile



# foodlv1 foodlv30 foodlv60 template template2 main_skill template3 choice sub_skill personality ownpokemon
isSelectedSeeder=(false false false false false false false false false false false)
isPokemonSelected=false
isMainSkillSelected=false

# 読み込んだファイルから1行ずつ読み出して、参照するデータをファイルに書き込みます
while read line; do
    originFileRowArray=($line)
    # echo ${originFileRowArray[0]}

    if [ ${originFileRowArray[0]} == "pokemon" ]; then
        echo "${originFileRowArray[1]} ${originFileRowArray[2]} ${originFileRowArray[1]} ${originFileRowArray[1]} ${originFileRowArray[1]}" >> $today/choice_pokemon_constrained_data.txt
        echo "${originFileRowArray[1]} ${originFileRowArray[1]} " >> $today/create_pokemon_template_data.txt
        echo "${originFileRowArray[1]} ${originFileRowArray[1]} ${originFileRowArray[1]} ${originFileRowArray[1]}" >> $today/create_pokemon_template2_data.txt
        echo "${originFileRowArray[1]} ${originFileRowArray[1]} ${originFileRowArray[1]} ${originFileRowArray[1]} ${originFileRowArray[6]}" >> $today/create_pokemon_template3_data.txt
        echo "${originFileRowArray[1]} ${originFileRowArray[3]} " >> $today/food_lv1_data.txt
        echo "${originFileRowArray[1]} ${originFileRowArray[3]} ${originFileRowArray[4]}" >> $today/food_lv30_data.txt
        echo "${originFileRowArray[1]} ${originFileRowArray[3]} ${originFileRowArray[4]} ${originFileRowArray[5]}" >> $today/food_lv60_data.txt

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

    elif [ ${originFileRowArray[0]} == "main_skill" ]; then
        echo "${originFileRowArray[1]} ${originFileRowArray[2]} " >> $today/main_skill_data.txt

        if [ $isMainSkillSelected == false ]; then
            isSelectedSeeder[5]=true

            isMainSkillSelected=true
        fi
    fi


done < $originFile



# echo ${isSelectedSeeder[@]}



# 引数のデータファイルを利用して、seederファイルに書き込むための文字列を生成します
# <<test
if [ ${isSelectedSeeder[0]} == true ]; then
    # generateAndInsertFoodlv1DataIntoSeeder.sh
    ./input_food_lv1_file.sh  $today/food_lv1_data.txt $today
fi
if [ ${isSelectedSeeder[1]} == true ]; then
    ./input_food_lv30_file.sh $today/food_lv30_data.txt $today
fi
if [ ${isSelectedSeeder[2]} == true ]; then
    ./input_food_lv60_file.sh $today/food_lv60_data.txt $today
fi
if [ ${isSelectedSeeder[3]} == true ]; then
    ./input_create_pokemon_template_file.sh $today/create_pokemon_template_data.txt $today
fi
if [ ${isSelectedSeeder[4]} == true ]; then
    ./input_create_pokemon_template2_file.sh $today/create_pokemon_template2_data.txt $today
fi
if [ ${isSelectedSeeder[5]} == true ]; then
    ./input_main_skill_file.sh $today/main_skill_data.txt $today
fi
if [ ${isSelectedSeeder[6]} == true ]; then
    ./input_create_pokemon_template3_file.sh $today/create_pokemon_template3_data.txt $today
fi
if [ ${isSelectedSeeder[7]} == true ]; then
    ./input_choice_pokemon_constrained_file.sh $today/choice_pokemon_constrained_data.txt $today
fi
if [ ${isSelectedSeeder[8]} == true ]; then
    ./input_sub_skill_file.sh $today/sub_skill_data.txt $today
fi
if [ ${isSelectedSeeder[9]} == true ]; then
    ./input_personality_file.sh $today/personality_data.txt $today
fi
if [ ${isSelectedSeeder[10]} == true ]; then
    ./input_own_pokemon_file.sh $today/own_pokemon_data.txt $today
fi
# test



databaseName=laravel
user=user
password=password

# データベースに検証用のテーブルを作成します
./makeTestPreTables.sh $databaseName $user $password
trap 'error_handler_after_makeTestPreTables "register_new_pokemon.sh" "after_makeTestPreTables.sh"; exit 1' ERR
# 検証テーブル用のデータを追加するためにシーダーを作成し、そのシーダーにデータを追加するための文字列を追加します
./makeTestPreTablesSeeder.sh
trap 'error_handler_after_makeTestPreTablesSeeder "register_new_pokemon.sh" "after_makeTestPreTablesSeeder.sh"; exit 1' ERR
# テストシーダーにデータを追加する文字列を追加します
./insertTestPreTablesSeeder.sh $today ${isSelectedSeeder[@]}
# テストテーブルにデータを実際に追加します
./insertTestPreTables.sh
# テストシーダーを削除します
./deleteTestPreTablesSeeder.sh
# 検証用テーブルを全て削除します
./dropTestPreTables.sh



# 更新する必要のあるシーダーのコメントアウトを解除します
./enable_selected_seeder.sh ${isSelectedSeeder[@]}
trap 'error_handler_after_enable_selected_seeder "register_new_pokemon.sh" "enable_selected_seeder.sh"; exit 1' ERR



# .envファイルのDB_HOSTをローカルにして、コマンドを実行できるようにします
./changeDB_HOSTToLocalHost.sh



# テストテーブルで検証したので、エラーが発生しない
if [ ${isSelectedSeeder[0]} == true ]; then
    ./outputFoodlv1DataIntoSeeder.sh $today/insertDataToSeeder/foodlv1.txt $today
    trap 'error_handler_after_outputFoodlv1 "register_new_pokemon.sh" "outputFoodlv1"; exit 1' ERR
fi
if [ ${isSelectedSeeder[1]} == true ]; then
    ./outputFoodlv30DataIntoSeeder.sh $today/insertDataToSeeder/foodlv30.txt $today
fi
if [ ${isSelectedSeeder[2]} == true ]; then
    ./outputFoodlv60DataIntoSeeder.sh $today/insertDataToSeeder/foodlv60.txt $today
fi
if [ ${isSelectedSeeder[3]} == true ]; then
    ./outputCreatePokemonTemplateDataIntoSeeder.sh $today/insertDataToSeeder/create_pokemon_template.txt $today
fi
if [ ${isSelectedSeeder[4]} == true ]; then
    ./outputCreatePokemonTemplate2DataIntoSeeder.sh $today/insertDataToSeeder/create_pokemon_template2.txt $today
fi
if [ ${isSelectedSeeder[5]} == true ]; then
    ./outputMainSkillDataIntoSeeder.sh $today/main_skill.txt $today
fi
if [ ${isSelectedSeeder[6]} == true ]; then
    ./outputCreatePokemonTemplate3DataIntoSeeder.sh $today/insertDataToSeeder/create_pokemon_template3.txt $today
fi
if [ ${isSelectedSeeder[7]} == true ]; then
    ./outputChoicePokemonConstrainedDataIntoSeeder.sh $today/insertDataToSeeder/choice_pokemon_constrained.txt $today
fi
if [ ${isSelectedSeeder[8]} == true ]; then
    ./outputSubSkillDataIntoSeeder.sh $today/sub_skill.txt $today
fi
if [ ${isSelectedSeeder[9]} == true ]; then
    ./outputPersonalityDataIntoSeeder.sh $today/personality.txt $today
fi
if [ ${isSelectedSeeder[10]} == true ]; then
    ./outputOwnPokemonDataIntoSeeder.sh $today/own_pokemon.txt $today
fi



# .envファイルのDB_HOSTをデータベースにして、ブラウザでアクセス可能にします
./changeDB_HOSTToDatabase.sh



# コメントアウトを解除した部分をまたコメントアウトします
./disable_selected_seeder.sh ${isSelectedSeeder[@]}


