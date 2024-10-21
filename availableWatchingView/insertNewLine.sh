# ./insertNewLine.sh test 3



trap 'echo $0 > error_log1.txt; exit 1' ERR



routeFileName=$1
repeatNumber=$2



# false
# exit 1
for i in $(seq $repeatNumber); do
    sed -i '' '$a\
\
' ../src/routes/$routeFileName.php
done
# exit 1
