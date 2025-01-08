


source ./errorTest.sh
trap 'error_handler_output_foodlv60 "outputFoodlv60DataIntoSeeder.sh"; exit 1' ERR 



# echo "outputFoodlv60DataIntoSeeder.sh"
# false



startLineNumber=18
insertLineNumber=18
inputFileName=$1
today=$2
writingFile=$(readlink food_lv60_seeder_symbolic)
insertFoodlv60SeedRowNumber=$(grep -n 'DB::table('\''foodlv60s'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)



sed -i '' ''$insertLineNumber'i\
        // '$today'に追加\
        DB::table('\'foodlv60s\'')->insert([\
' $writingFile
# 最後に挿入した文字列全体をコメントアウトするために追加した行数分、数をプラスしています
insertLineNumber=$((insertLineNumber+2))



while read -r line; do
  array=($line)
  
  echo $array

  sed -i '' ''$insertLineNumber'i\
            '$array'\
' $writingFile
  insertLineNumber=$((insertLineNumber+1))

#   sed -i '' $(($insertFoodlv60SeedRowNumber+2))'i\
#             '$array'\
# ' ../../../src/database/seeders/PokemonSleep/BackupSeeder.php
done < $inputFileName
# done < 20241229/insertDataToSeeder/foodlv60.txt



sed -i '' ''$insertLineNumber'i\
        ]);\
' $writingFile
insertLineNumber=$((insertLineNumber+1))



cd ../../../src
php artisan db:seed
cd ../shellScript/pokemonsleep/new_register_new_pokemon



sed -i '' ''$startLineNumber'i\
        /*\
' $writingFile
insertLineNumber=$((insertLineNumber+1))



sed -i '' ''$insertLineNumber'i\
        */\
\
' $writingFile


