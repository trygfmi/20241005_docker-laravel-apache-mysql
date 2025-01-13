# 新規ポケモンが追加されたときに実行するシェルスクリプト
# 指定したファイルから1行ずつ文字列を受け取って、php artisan db:seedで利用できる文字列を生成し、対象ファイルに記述するシェルスクリプトです
# 実行例: ./input_choice_pokemon_constrained_file.sh 2024-10-11/choice_pokemon_constrained_data.txt
# choice_pokemon_constrained_seeder_symbolic
# ../../../src/database/seeders/PokemonSleep/ChoicePokemonConstrainedSeeder.php



trap 'exit 1' ERR 



# echo "input_choice_pokemon_constrained_file.sh"
# false



# 読み込むファイル名
inputFileName=$1



# 読み込むファイルの末尾に改行がないと最後の行が読み込まれないので改行を入れる処理を記述しています
./addNewLineIfLastCharIsNotEmptyLine.sh $inputFileName



# today=$(date +"%Y-%m-%d")
today=$2



# ファイルを1行ずつ読み込む
while read -r line; do
  choicePokemonConstrainedDataRowArray=($line)
#   newPokemonRow=$(echo "[\\'id\\'=>"${choicePokemonConstrainedDataRowArray[0]}", \\'food1\\'=>\\'"${choicePokemonConstrainedDataRowArray[1]}"\\', \\'food2\\'=>\\'"${choicePokemonConstrainedDataRowArray[2]}"\\', \\'created_at\\'=>now(), \\'updated_at\\'=>now()],")
  newPokemonRow=$(echo "[\\'id\\'=>"${choicePokemonConstrainedDataRowArray[0]}",\\'name\\'=>\\'"${choicePokemonConstrainedDataRowArray[1]}"\\',\\'create_pokemon_template_id\\'=>"${choicePokemonConstrainedDataRowArray[2]}",\\'create_pokemon_template2_id\\'=>"${choicePokemonConstrainedDataRowArray[3]}",\\'create_pokemon_template3_id\\'=>"${choicePokemonConstrainedDataRowArray[4]}",\\'created_at\\'=>now(),\\'updated_at\\'=>now()],")
  echo $newPokemonRow >> $today/insertDataToSeeder/choice_pokemon_constrained.txt
done < $inputFileName


