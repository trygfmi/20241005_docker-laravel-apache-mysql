# ./insertControllerShowMethod.sh test2 test Test2Controller Test PreviewRouteTest Preview



trap 'echo $0 > error_log2_insertControllerShowMethod.txt; exit 1' ERR



viewFileName=$1
viewFolderName=$2
controllerFileName=$3
controllerFolderName=$4
modelFileName=$5
modelFolderName=$6
controllerMethodName=$7
insertRowNumber=$8



sed -i '' ''$insertRowNumber'i\
\
    public function '$controllerMethodName'(){\
        $result = '$modelFileName'::all();\
\
        return view('\'$viewFolderName'.'$viewFileName\'', ['\''message'\''=>$result]);\
    }\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php



