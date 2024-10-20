# ./insertUseStatementAndGetRoute.sh pokemon-sleep-test TestTestController Test create pokemon-sleep-test-create test



trap 'echo $0 > error_log2_insertControllerShowMethod.txt' ERR



insertRowNumber=$1
modelFileName=$2
modelFolderName=$3
controllerFileName=$4
controllerFolderName=$5



sed -i '' ''$insertRowNumber'i\
use App\\Models\\'$modelFolderName'\\'$modelFileName';\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
# false
# exit 1