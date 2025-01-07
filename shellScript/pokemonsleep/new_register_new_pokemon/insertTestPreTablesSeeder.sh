


source ./errorTest.sh
trap 'error_handler $today; exit 1' ERR 



today=$1
isFoodlv1Selected=$2
isFoodlv30Selected=$3
isFoodlv60Selected=$4
isCreatePokemonTemplateSelected=$5
isCreatePokemonTemplate2Selected=$6
isMainSkillSelected=$7
isCreatePokemonTemplate3Selected=$8
isChoicePokemonConstrainedSelected=$9
isSubSkillSelected=${10}
isPersonalitySelected=${11}



echo "foodlv1:"$isFoodlv1Selected
if [ -n "$isFoodlv1Selected" ] && [ $isFoodlv1Selected == true ] ; then
    insertFoodlv1SeedRowNumber=$(grep -n 'DB::table('\''foodlv1s'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertFoodlv1SeedRowNumber
    insertFoodlv1SeedRowNumber=$((insertFoodlv1SeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertFoodlv1SeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertFoodlv1SeedRowNumber=$((insertFoodlv1SeedRowNumber+1))
    done < $today/insertDataToSeeder/foodlv1.txt
fi



echo "foodlv30:"$isFoodlv30Selected
if [ -n "$isFoodlv30Selected" ] && [ $isFoodlv30Selected == true ]; then
    insertFoodlv30SeedRowNumber=$(grep -n 'DB::table('\''foodlv30s'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertFoodlv30SeedRowNumber
    insertFoodlv30SeedRowNumber=$((insertFoodlv30SeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertFoodlv30SeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertFoodlv30SeedRowNumber=$((insertFoodlv30SeedRowNumber+1))
    done < $today/insertDataToSeeder/foodlv30.txt
fi




echo "foodlv60:"$isFoodlv60Selected
if [ -n "$isFoodlv60Selected" ] && [ $isFoodlv60Selected == true ]; then
    insertFoodlv60SeedRowNumber=$(grep -n 'DB::table('\''foodlv60s'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertFoodlv60SeedRowNumber
    insertFoodlv60SeedRowNumber=$((insertFoodlv60SeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertFoodlv60SeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertFoodlv60SeedRowNumber=$((insertFoodlv60SeedRowNumber+1))
    done < $today/insertDataToSeeder/foodlv60.txt
fi



echo "createPokemonTemplate:"$isCreatePokemonTemplateSelected
if [ -n "$isCreatePokemonTemplateSelected" ] && [ $isCreatePokemonTemplateSelected == true ]; then
    insertCreatePokemonTemplateSeedRowNumber=$(grep -n 'DB::table('\''create_pokemon_templates'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertCreatePokemonTemplateSeedRowNumber
    insertCreatePokemonTemplateSeedRowNumber=$((insertCreatePokemonTemplateSeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertCreatePokemonTemplateSeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertCreatePokemonTemplateSeedRowNumber=$((insertCreatePokemonTemplateSeedRowNumber+1))
    # done < $inputFileName
    done < $today/insertDataToSeeder/create_pokemon_template.txt
fi




echo "createPokemonTemplate2:"$isCreatePokemonTemplate2Selected
if [ -n "$isCreatePokemonTemplate2Selected" ] && [ $isCreatePokemonTemplate2Selected == true ]; then
    insertCreatePokemonTemplate2SeedRowNumber=$(grep -n 'DB::table('\''create_pokemon_template2s'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertCreatePokemonTemplate2SeedRowNumber
    insertCreatePokemonTemplate2SeedRowNumber=$((insertCreatePokemonTemplate2SeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertCreatePokemonTemplate2SeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertCreatePokemonTemplate2SeedRowNumber=$((insertCreatePokemonTemplate2SeedRowNumber+1))
    # done < $inputFileName
    done < $today/insertDataToSeeder/create_pokemon_template2.txt
fi




echo "mainSkill:"$isMainSkillSelected
if [ -n "$isMainSkillSelected" ] && [ $isMainSkillSelected == true ]; then
    insertMainSkillSeedRowNumber=$(grep -n 'DB::table('\''main_skills'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertMainSkillSeedRowNumber
    insertMainSkillSeedRowNumber=$((insertMainSkillSeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertMainSkillSeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertMainSkillSeedRowNumber=$((insertMainSkillSeedRowNumber+1))
    # done < $inputFileName
    done < $today/insertDataToSeeder/main_skill.txt
fi




echo "createPokemonTemplate3:"$isCreatePokemonTemplate3Selected
if [ -n "$isCreatePokemonTemplate3Selected" ] && [ $isCreatePokemonTemplate3Selected == true ]; then
    insertCreatePokemonTemplate3SeedRowNumber=$(grep -n 'DB::table('\''create_pokemon_template3s'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertCreatePokemonTemplate3SeedRowNumber
    insertCreatePokemonTemplate3SeedRowNumber=$((insertCreatePokemonTemplate3SeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertCreatePokemonTemplate3SeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertCreatePokemonTemplate3SeedRowNumber=$((insertCreatePokemonTemplate3SeedRowNumber+1))
    # done < $inputFileName
    done < $today/insertDataToSeeder/create_pokemon_template3.txt
fi




echo "choicePokemonConstrained:"$isChoicePokemonConstrainedSelected
if [ -n "$isChoicePokemonConstrainedSelected" ] && [ $isChoicePokemonConstrainedSelected == true ]; then
    insertChoicePokemonConstrainedSeedRowNumber=$(grep -n 'DB::table('\''choice_pokemon_constraineds'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertChoicePokemonConstrainedSeedRowNumber
    insertChoicePokemonConstrainedSeedRowNumber=$((insertChoicePokemonConstrainedSeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertChoicePokemonConstrainedSeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertChoicePokemonConstrainedSeedRowNumber=$((insertChoicePokemonConstrainedSeedRowNumber+1))
    # done < $inputFileName
    done < $today/insertDataToSeeder/choice_pokemon_constrained.txt
fi




echo "subSkill:"$isSubSkillSelected
if [ -n "$isSubSkillSelected" ] && [ $isSubSkillSelected == true ]; then
    insertSubSkillSeedRowNumber=$(grep -n 'DB::table('\''sub_skills'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertSubSkillSeedRowNumber
    insertSubSkillSeedRowNumber=$((insertSubSkillSeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertSubSkillSeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertSubSkillSeedRowNumber=$((insertSubSkillSeedRowNumber+1))
    # done < $inputFileName
    done < $today/insertDataToSeeder/sub_skill.txt
fi




echo "personality:"$isPersonalitySelected
if [ -n "$isPersonalitySelected" ] && [ $isPersonalitySelected == true ]; then
    insertPersonalitySeedRowNumber=$(grep -n 'DB::table('\''personalities'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php | cut -d: -f1)
    # echo $insertPersonalitySeedRowNumber
    insertPersonalitySeedRowNumber=$((insertPersonalitySeedRowNumber+1))

    while read -r line; do
    array=($line)
    
    # echo $array

    sed -i '' ''$insertPersonalitySeedRowNumber'i\
                '$array'\
    ' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
    insertPersonalitySeedRowNumber=$((insertPersonalitySeedRowNumber+1))
    # done < $inputFileName
    done < $today/insertDataToSeeder/personality.txt
fi




