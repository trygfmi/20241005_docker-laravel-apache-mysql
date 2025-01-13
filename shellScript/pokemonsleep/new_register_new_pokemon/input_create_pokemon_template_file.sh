# 新規ポケモンが追加されたときに実行するシェルスクリプト
# 指定したファイルから1行ずつ文字列を受け取って、php artisan db:seedで利用できる文字列を生成し、対象ファイルに記述するシェルスクリプトです
# 実行例: ./input_create_pokemon_template_file.sh 2024-10-11/create_pokemon_template_data.txt
# create_pokemon_template_seeder_symbolic
# ../../../src/database/seeders/PokemonSleep/CreatePokemonTemplateSeeder.php



trap 'exit 1' ERR 



# echo "input_create_pokemon_templete_file.sh"
# false



# 読み込むファイル名
inputFileName=$1



# 読み込むファイルの末尾に改行がないと最後の行が読み込まれないので改行を入れる処理を記述しています
./addNewLineIfLastCharIsNotEmptyLine.sh $inputFileName



# today=$(date +"%Y-%m-%d")
today=$2



# ファイルを1行ずつ読み込む
while read -r line; do
  createPokemonTemplateDataRowArray=($line)
#   newPokemonRow=$(echo "[\\'id\\'=>"${createPokemonTemplateDataRowArray[0]}", \\'food1\\'=>\\'"${createPokemonTemplateDataRowArray[1]}"\\', \\'food2\\'=>\\'"${createPokemonTemplateDataRowArray[2]}"\\', \\'created_at\\'=>now(), \\'updated_at\\'=>now()],")
  newPokemonRow=$(echo "[\\'id\\'=>"${createPokemonTemplateDataRowArray[0]}",\\'foodlv1_id\\'=>"${createPokemonTemplateDataRowArray[1]}",\\'created_at\\'=>now(),\\'updated_at\\'=>now()],")
  echo $newPokemonRow >> $today/insertDataToSeeder/create_pokemon_template.txt
done < $inputFileName


