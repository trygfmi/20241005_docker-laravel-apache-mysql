# 例: ./insertNewFoodlv1Seeder.sh 425 ワカクサコ ーン 425 ワカクサコーン


sed -i '' '18i\
        /*\
' src/database/seeders/PokemonSleep/Foodlv1Seeder.php

# 24は行番号を見て手動で変更
sed -i '' '24i\
        */\
' src/database/seeders/PokemonSleep/Foodlv1Seeder.php

sed -i '' '18i\
\
' src/database/seeders/PokemonSleep/Foodlv1Seeder.php

sed -i '' '18i\
        DB::table('\'foodlv1s\'')->insert([\
            ['\'id\''=>'$1', '\'food1\''=>'\'$2\'', '\'created_at\''=>now(), '\'updated_at\''=>now()],\
            ['\'id\''=>'$3', '\'food1\''=>'\'$4\'', '\'created_at\''=>now(), '\'updated_at\''=>now()],\
        ]);\
' src/database/seeders/PokemonSleep/Foodlv1Seeder.php

