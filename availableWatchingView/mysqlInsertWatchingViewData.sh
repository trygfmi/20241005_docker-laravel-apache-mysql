# ./mysqlInsertWatchingViewData.sh test1 test2 test3 test4 test5 "" "" "" "" "" user password



view_file_name=$1
route_url=$2
controller=$3
get_method=$4
get_helper_name=$5
middleware=$6
post_method=$7
post_helper_name=$8
model=$9
table_name=${10}
routeFileName=${11}
user=${12}
password=${13}



mysql -h 127.0.0.1 -P 3306 -u $user -p$password laravel --skip-column-names <<EOF
insert into preview_route_$routeFileName (view_file_name, route_url, controller, get_method,
get_helper_name, middleware, post_method, post_helper_name, model, table_name) 
values ("$view_file_name", "$route_url", "$controller", "$get_method", 
"$get_helper_name", "$middleware", "$post_method", "$post_helper_name", 
"$model", "$table_name");
EOF
