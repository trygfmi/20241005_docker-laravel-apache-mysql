


source ./errorTest.sh
trap 'error_handler_output_foodlv30 "outputFoodlv30DataIntoSeeder.sh"; exit 1' ERR 



# echo "outputFoodlv30DataIntoSeeder.sh"
# false



startLineNumber=18
insertLineNumber=18
inputFileName=$1
today=$2
writingFile=$(readlink food_lv30_seeder_symbolic)
insertFoodlv30SeedRowNumber=$(grep -n 'DB::table('\''foodlv30s'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)



sed -i '' ''$insertLineNumber'i\
        // '$today'に追加\
        DB::table('\'foodlv30s\'')->insert([\
' $writingFile
# 最後に挿入した文字列全体をコメントアウトするために追加した行数分、数をプラスしています
insertLineNumber=$((insertLineNumber+2))



insertLineNumber=$(./readData.sh $insertLineNumber $inputFileName $writingFile)



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


