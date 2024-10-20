error_handler(){
    echo "error at tryShellScriptBehavior"
    exit 1
}



trap 'error_handler' ERR



echo "tryShellScriptBehavior"



./tryTest.sh



echo "tryShellScriptBehavior"
