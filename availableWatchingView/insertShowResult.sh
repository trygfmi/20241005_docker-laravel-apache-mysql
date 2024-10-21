# ./insertShowResult.sh test test laravel register_shell_scripts user password



source ./errorInInsertShowResult.sh
trap 'error_handler "$LINENO" $(cat error_log2_insertShowResult.txt) $(echo $0 > error_log1.txt); exit 1' ERR



viewFileName=$1
viewFolderName=$2
databaseName=$3
tableName=$4
user=$5
password=$6




result=$(./mysqlGetTableColumns.sh $databaseName $tableName $user $password)



array=($result)
for i in $(seq 0 $((${#array[@]}-1))); do
    echo $i:${array[$i]}
done


insertRowNumber=4
sed -i '' ''$insertRowNumber'i\
    @if(isset($message))\
        <table>\
            <thead>\
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php
insertRowNumber=$(($insertRowNumber+3))


                
for column in ${array[@]}; do
    if [ $column != "created_at" ] && [ $column != "updated_at" ]; then
        sed -i '' ''$insertRowNumber'i\
                <th>'$column'</th>\
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php
        insertRowNumber=$(($insertRowNumber+1))
    fi
done



sed -i '' ''$insertRowNumber'i\
            </thead>\
            <tbody>\
            @foreach($message as $m)\
                <tr>\
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php
insertRowNumber=$(($insertRowNumber+4))



for column in ${array[@]}; do
    if [ $column != "created_at" ] && [ $column != "updated_at" ]; then
        if [ $column == "image_path" ]; then
            sed -i '' ''$insertRowNumber'i\
                    <td><img src="{{asset('\'storage\'')}}/{{$m->'$column'}}" alt="{{$m->own_pokemon_name}}"></td>\
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php
        elif [ $column == "shiny_image_path" ]; then
            sed -i '' ''$insertRowNumber'i\
                    <td><img src="{{asset('\'storage\'')}}/{{$m->'$column'}}" alt="{{$m->own_pokemon_name}}"></td>\
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php
        else
            sed -i '' ''$insertRowNumber'i\
                    <td>{{$m->'$column'}}</td>\
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php
        fi
        insertRowNumber=$(($insertRowNumber+1))
    fi
done



sed -i '' ''$insertRowNumber'i\
                </tr>\
            @endforeach\
            </tbody>\
        </table>\
    @endif\
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php


