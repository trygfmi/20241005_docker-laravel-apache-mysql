# ./mysqlInsertViewData.sh laravel preview_route_tests user password test-show test-show Test2Controller show test-show-show "" "" "" "" "" preview_route_tests PreviewRouteTest



trap 'echo $0 > error_log1.txt; exit 1' ERR



databaseName=$1
tableName=$2
user=$3
password=$4

view_file_name=$5
route_url=$6
controller=$7
get_method=$8
get_helper_name=$9
middleware=${10}
post_method=${11}
post_helper_name=${12}
table_name=${13}
model=${14}



mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName <<EOF
insert into $tableName 
(view_file_name, route_url, controller, get_method, get_helper_name, table_name, model) 
values ("$view_file_name.blade.php", "$route_url", "$controller", "$get_method", "$get_helper_name", "$table_name", "$model");
EOF


