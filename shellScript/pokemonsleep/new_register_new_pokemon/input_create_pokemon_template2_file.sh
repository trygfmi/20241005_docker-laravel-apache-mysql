# 新規ポケモンが追加されたときに実行するシェルスクリプト
# 指定したファイルから1行ずつ文字列を受け取って、php artisan db:seedで利用できる文字列を生成し、対象ファイルに記述するシェルスクリプトです
# 実行例: ./input_create_pokemon_template2_file.sh 2024-10-11/create_pokemon_template2_data.txt
# create_pokemon_template2_seeder_symbolic
# ../../../src/database/seeders/PokemonSleep/CreatePokemontemplate2Seeder.php



# 読み込むファイル名
inputFileName=$1


# 読み込むファイルの末尾に改行がないと最後の行が読み込まれないので改行を入れる処理を記述しています
# ファイルの末尾の1文字を取得
last_char=$(tail -c 1 "$inputFileName")
# 最後の文字が改行でない場合
if [ -n "$last_char" ] && [ $last_char != '\n' ]; then
    echo "読み込んだファイルの末尾に改行を追加しました"
    sed -i '' '$a\
\
' $inputFileName
fi



startLineNumber=18
insertLineNumber=18
# today=$(date +"%Y-%m-%d")
today=$2
writingFile=$(readlink create_pokemon_template2_seeder_symbolic)



sed -i '' ''$insertLineNumber'i\
        // '$today'に追加\
        DB::table('\'create_pokemon_template2s\'')->insert([\
' $writingFile
# 最後に挿入した文字列全体をコメントアウトするために追加した行数分、数をプラスしています
insertLineNumber=$((insertLineNumber+2))



# ファイルを1行ずつ読み込む
while read -r line; do
  array=($line)
#   newPokemonRow=$(echo "[\\'id\\'=>"${array[0]}", \\'food1\\'=>\\'"${array[1]}"\\', \\'food2\\'=>\\'"${array[2]}"\\', \\'created_at\\'=>now(), \\'updated_at\\'=>now()],")
  newPokemonRow=$(echo "[\\'id\\'=>"${array[0]}",\\'food_lv1_id\\'=>"${array[1]}",\\'food_lv30_id\\'=>"${array[2]}",\\'food_lv60_id\\'=>"${array[3]}",\\'created_at\\'=>now(),\\'updated_at\\'=>now()],")
  sed -i '' ''$insertLineNumber'i\
            '$newPokemonRow'\
' $writingFile
  insertLineNumber=$((insertLineNumber+1))
done < $inputFileName



sed -i '' ''$insertLineNumber'i\
        ]);\
' $writingFile
insertLineNumber=$((insertLineNumber+1))



# <<test
cd ../../../src
php artisan db:seed
cd ../shellscript/pokemonsleep/new_register_new_pokemon
# test



sed -i '' ''$startLineNumber'i\
        /*\
' $writingFile
insertLineNumber=$((insertLineNumber+1))



sed -i '' ''$insertLineNumber'i\
        */\
\
' $writingFile


