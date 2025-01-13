# ./changeDB_HOSTToDatabase.sh
# .envファイルのDB_HOSTをローカルホストからデーターベースに変更して、データベースの内容をブラウザで閲覧可能にします



sed -i '' 's|# DB_HOST=laravel_db2|DB_HOST=laravel_db2|g' ../../../src/.env
sed -i '' 's|DB_HOST=127.0.0.1|# DB_HOST=127.0.0.1|g' ../../../src/.env
