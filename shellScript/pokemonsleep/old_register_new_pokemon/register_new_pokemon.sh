# 該当日付フォルダを引数に指定して実行してください
# 実行例 ./register_new_pokemon.sh 2024-10-11



./input_food_lv1_file.sh  $1/food_lv1_data.txt
./input_food_lv30_file.sh $1/food_lv30_data.txt
./input_food_lv60_file.sh $1/food_lv60_data.txt
./input_create_pokemon_template_file.sh $1/create_pokemon_template_data.txt
./input_create_pokemon_template2_file.sh $1/create_pokemon_template2_data.txt
./input_main_skill_file.sh $1/main_skill_data.txt
./input_create_pokemon_template3_file.sh $1/create_pokemon_template3_data.txt
./input_choice_pokemon_constrained_file.sh $1/choice_pokemon_constrained_data.txt
