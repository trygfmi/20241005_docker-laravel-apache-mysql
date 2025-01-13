# ./makeWorkingAndDataDirectory.sh 20250108



today=$1



if [ -d "$today" ]; then
    echo "フォルダは既に作成済み"
else
    echo $today"フォルダを作成"
    mkdir $today
    mkdir $today/insertDataToSeeder
fi
