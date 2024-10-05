sed -i '' '$a\
\
' src/routes/web.php

sed -i '' '$a\
Route::get('\'$1\'', ['\'$2Controller\''::class, '\'$3\'']);' src/routes/web.php

