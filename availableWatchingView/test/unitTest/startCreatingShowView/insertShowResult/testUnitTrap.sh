# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertShowResult
# ./testUnitTrap.sh



cd ../../../..



sed -i '' '7i\
false\
' insertShowResult.sh



./insertShowResult.sh test test laravel register_shell_scripts user password




sleep 3



sed -i '' '7d' insertShowResult.sh


