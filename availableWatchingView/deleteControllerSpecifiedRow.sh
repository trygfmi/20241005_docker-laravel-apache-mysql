# ./deleteSpecifiedRow.sh 17 test2 test



specifiedRow=$1
viewFileName=$2
viewFolderName=$3



sed -i '' ''$specifiedRow'd' ../src/resources/views/$3/$2.blade.php