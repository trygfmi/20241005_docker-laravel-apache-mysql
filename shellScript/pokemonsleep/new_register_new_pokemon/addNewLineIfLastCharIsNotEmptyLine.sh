# ./addNewLineIfLastCharIsNotEmptyLine.sh originFile.txt
# ファイルの最後の行が空の行でなければ、その一つ前の行を読み込んでくれないので、最後に行を追加


originFile=$1



# 読み込むファイルの末尾が改行でなければ、改行を挿入して全ての行を読めるようにします
# ファイルの末尾の1文字を取得
last_char=$(tail -c 1 "$originFile")
# 最後の文字が改行でない場合
if [ -n "$last_char" ] && [ "$last_char" != "\n" ]; then
    insertNewLineAtLastRow.sh $originFile
fi
