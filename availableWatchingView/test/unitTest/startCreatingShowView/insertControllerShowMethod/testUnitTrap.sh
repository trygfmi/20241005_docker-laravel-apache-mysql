# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertControllerShowMethod
# ./testUnitTrap.sh



cd ../../../..



sed -i '' '7i\
false\
' insertControllerShowMethod.sh



sed -i '' '89i\
        exit 1\
' errorInStartCreatingShowView.sh



./insertControllerShowMethod.sh test-show1000 test laravel register_shell_scripts user password testshow1000Show



sleep 3



rm -f error_log1.txt



sed -i '' '89d' errorInStartCreatingShowView.sh



sed -i '' '7d' insertControllerShowMethod.sh


