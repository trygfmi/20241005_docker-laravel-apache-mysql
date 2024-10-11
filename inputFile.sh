#!/bin/bash

# 読み込むファイル名
inputFileName="test.txt"

startLineNumber=18
insertLineNumber=18
today=$(date +"%Y%m%d")


sed -i '' ''$insertLineNumber'i\
        // '$today'に追加\
        DB::table('\'foodlv30s\'')->insert([\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php
insertLineNumber=$((insertLineNumber+2))



# ファイルを1行ずつ読み込む
while read line; do
  array=($line)
#   newPokemonRow=$(echo "[\\'id\\'=>"${array[0]}", \\'food1\\'=>\\'"${array[1]}"\\', \\'food2\\'=>\\'"${array[2]}"\\', \\'created_at\\'=>now(), \\'updated_at\\'=>now()],")
  newPokemonRow=$(echo "[\\'id\\'=>"${array[0]}",\\'food1\\'=>\\'"${array[1]}"\\',\\'food2\\'=>\\'"${array[2]}"\\',\\'created_at\\'=>now(),\\'updated_at\\'=>now()],")
  sed -i '' ''$insertLineNumber'i\
            '$newPokemonRow'\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php
  insertLineNumber=$((insertLineNumber+1))
done < $inputFileName



sed -i '' ''$insertLineNumber'i\
        ]);\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php
insertLineNumber=$((insertLineNumber+1))



sed -i '' ''$startLineNumber'i\
        /*\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php
insertLineNumber=$((insertLineNumber+1))



sed -i '' ''$insertLineNumber'i\
        */\
\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php


echo $insertLineNumber
