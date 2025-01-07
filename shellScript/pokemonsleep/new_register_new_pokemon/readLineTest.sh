startLineNumber=18
insertLineNumber=18
inputFileName=$1
writingFile=$(readlink food_lv1_seeder_symbolic)



sed -i '' ''$insertLineNumber'i\
        // '$today'に追加\
        DB::table('\'foodlv1s\'')->insert([\
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
done < $inputFileName
# done < 20241229/insertDataToSeeder/foodlv1.txt



sed -i '' ''$insertLineNumber'i\
        ]);\
' $writingFile
insertLineNumber=$((insertLineNumber+1))



sed -i '' ''$startLineNumber'i\
        /*\
' $writingFile
insertLineNumber=$((insertLineNumber+1))



sed -i '' ''$insertLineNumber'i\
        */\
\
' $writingFile