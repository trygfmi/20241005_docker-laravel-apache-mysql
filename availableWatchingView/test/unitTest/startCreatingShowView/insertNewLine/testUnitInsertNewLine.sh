# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertNewLine
# ./testUnitTrap.sh



cd ../../../..



routeFileName=test
repeatNumber=3



./insertNewLine.sh $routeFileName $repeatNumber



sleep 3



deleteRowNumber=$(wc -l < ../src/routes/$routeFileName.php)
echo $deleteRowNumber



for i in $(seq $repeatNumber); do
    sed -i '' ''$deleteRowNumber'd' ../src/routes/$routeFileName.php
    deleteRowNumber=$(($deleteRowNumber-1))
done


