# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertNewLine
# ./testUnitTrap.sh



cd ../../../..



routeFileName=test
repeatNumber=3



sed -i '' '6i\
false\
' insertNewLine.sh



./insertNewLine.sh $routeFileName $repeatNumber



sleep 3



rm -f error_log1.txt



sed -i '' '6d' insertNewLine.sh


