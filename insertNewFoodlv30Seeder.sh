# 例: ./insertNewFoodlv30Seeder.sh 425 ワカクサコーン ピュアなオイル 426 ワカクサコーン ピュアなオイル


sed -i '' '18i\
        /*\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php

# 24は行番号を見て手動で変更
sed -i '' '24i\
        */\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php

sed -i '' '18i\
\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php

sed -i '' '18i\
        DB::table('\'foodlv30s\'')->insert([\
            ['\'id\''=>'$1', '\'food1\''=>'\'$2\'', '\'food2\''=>'\'$3\'', '\'created_at\''=>now(), '\'updated_at\''=>now()],\
            ['\'id\''=>'$4', '\'food1\''=>'\'$5\'', '\'food2\''=>'\'$6\'', '\'created_at\''=>now(), '\'updated_at\''=>now()],\
        ]);\
' src/database/seeders/PokemonSleep/Foodlv30Seeder.php



for number in {1..10}
do
    echo $number
done

for number in "$@"
do
    echo $number
done