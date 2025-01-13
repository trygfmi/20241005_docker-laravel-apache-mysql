# $1:ファイル名
# ./insertNewLineAtLastRow.sh test.txt



trap 'exit 1' ERR 



originFile=$1


# 読み込むファイルの末尾が改行でなければ、改行を挿入して全ての行を読めるようにします
echo "読み込んだファイルの末尾に改行を追加しました"
sed -i '' '$a\
\
' $originFile