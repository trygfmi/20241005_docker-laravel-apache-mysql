source testError.sh
trap 'test_error_handler1; exit 1' ERR
# false

trap 'test_error_handler2; exit 1' ERR
false
