error_handler(){
    workingDirectory=$today
    echo "error"
    echo "エラーを処理したシェルスクリプト:register_new_pokemon.sh"
    echo "ワーキングディレクトリーを削除:"$workingDirectory
    rm -r $workingDirectory
}

error_handler_after_makeTestPreTables(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_sub_skill $placeOfErrorShellScript $placeOfErrorCommand

    error_handler
}

error_handler_after_makeTestPreTablesSeeder(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_sub_skill $placeOfErrorShellScript $placeOfErrorCommand

    error_handler

    rm ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php
}

error_handler_insertTestPreTables(){
    placeOfErrorShellScript=$1
    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript


    sed -i '' 's|# DB_HOST=laravel_db2|DB_HOST=laravel_db2|g' ../../../src/.env
    sed -i '' 's|DB_HOST=127.0.0.1|# DB_HOST=127.0.0.1|g' ../../../src/.env

    sed -i '' 's|$this->call(TestPreTablesSeeder::class);|// $this->call(TestPreTablesSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php

}

error_handler_dropTestPreTables(){
    placeOfErrorShellScript=$1
    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript

}

error_handler_after_enable_selected_seeder(){
    placeOfErrorShellScript=$1
    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript


    sed -i '' 's|# DB_HOST=laravel_db2|DB_HOST=laravel_db2|g' ../../../src/.env
    sed -i '' 's|DB_HOST=127.0.0.1|# DB_HOST=127.0.0.1|g' ../../../src/.env

    ./disable_selected_seeder.sh ${isSelectedSeeder[@]}

    workingDirectory=$today
    echo "ワーキングディレクトリーを削除:"$workingDirectory
    rm -r $workingDirectory
}

error_handler_after_outputFoodlv1(){
    placeOfErrorShellScript=$1
    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript


    error_handler_after_enable_selected_seeder $placeOfErrorShellScript


}

error_handler_foodlv1(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2
    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "エラーが起きたmysqlコマンド:"$placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_foodlv1s;
EOF
}

error_handler_foodlv30(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_foodlv1 $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_foodlv30s;
EOF
}

error_handler_foodlv60(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2
    

    error_handler_foodlv30 $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_foodlv60s;
EOF
}

error_handler_create_pokemon_template(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_foodlv60 $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_create_pokemon_templates;
EOF
}

error_handler_create_pokemon_template2(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_create_pokemon_template $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_create_pokemon_template2s;
EOF
}

error_handler_create_pokemon_template3(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_create_pokemon_template2 $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_create_pokemon_template3s;
EOF
}

error_handler_choice_pokemon_constrained(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_create_pokemon_template3 $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_choice_pokemon_constraineds;
EOF
}

error_handler_main_skill(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_choice_pokemon_constrained $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_main_skills;
EOF
}

error_handler_personality(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_main_skill $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_personalities;
EOF
}

error_handler_sub_skill(){
    placeOfErrorShellScript=$1
    placeOfErrorCommand=$2


    error_handler_personality $placeOfErrorShellScript $placeOfErrorCommand

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
drop table test_sub_skills;
EOF
}

error_handler_output_foodlv1(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink food_lv1_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile
}

error_handler_output_foodlv30(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink food_lv30_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_foodlv1
}

error_handler_output_foodlv60(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink food_lv60_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_foodlv30
}

error_handler_output_create_pokemon_template(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink create_pokemon_template_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_foodlv60
}

error_handler_output_create_pokemon_template2(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink create_pokemon_template2_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_create_pokemon_template
}

error_handler_output_main_skill(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink main_skill_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_create_pokemon_template2
}

error_handler_output_create_pokemon_template3(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink create_pokemon_template3_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_create_pokemon_template2
}

error_handler_output_choice_pokemon_constrained(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink choice_pokemon_constrained_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_create_pokemon_template3
}

error_handler_output_sub_skill(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink sub_skill_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_choice_pokemon_constrained
}

error_handler_output_personality(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink personality_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_sub_skill
}

error_handler_output_own_pokemon(){
    placeOfErrorShellScript=$1
    targetFile=$(readlink own_pokemon_seeder_symbolic)


    echo "error"
    echo "エラーが起きたシェルスクリプト:"$placeOfErrorShellScript
    echo "startLineNumber:"$startLineNumber
    echo "insertLineNumber:"$insertLineNumber


    echo $targetFile
    sleep 2
    sed -i '' ''$startLineNumber','$insertLineNumber'd' $targetFile
    sed -i '' '18d' $targetFile

    error_handler_output_personality
}


