sed -i '' '1i\
        public function setNameAttribute($value){\
            $this->attributes['name'] = $value ?: null;\
        }\
' src/app/Http/Models/$1.php