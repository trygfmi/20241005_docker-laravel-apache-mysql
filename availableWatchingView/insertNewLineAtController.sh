# ./insertNewLineAtController.sh 3 8 Test2Controller Test



repeatNumber=$1
insertRowNumber=$2
controllerFileName=$3
controllerFolderName=$4




for i in $(seq $repeatNumber); do
    sed -i '' ''$insertRowNumber'i\
\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
done