<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <!-- 現在のown_pokemon_completesテーブルに保存されている全レコードをseederで追加できる状態の文字列を出力 -->
    @if(isset($ownPokemonComplete))
        @foreach($ownPokemonComplete as $opc)
            [
                'image_path'=>'{{$opc->image_path}}',
                'own_pokemon_name'=>'{{$opc->own_pokemon_name}}',
                'nickname'=>'{{$opc->nickname}}',
                'sp'=>{{$opc->sp}},
                'lv'=>{{$opc->lv}},
                'food_lv1'=>'{{$opc->food_lv1}}',
                'food_lv30'=>'{{$opc->food_lv30}}', 
                'food_lv60'=>'{{$opc->food_lv60}}', 
                'main_skill'=>'{{$opc->main_skill}}', 
                'sub_skill_lv1'=>'{{$opc->sub_skill_lv1}}', 
                'sub_skill_lv25'=>'{{$opc->sub_skill_lv25}}', 
                'sub_skill_lv50'=>'{{$opc->sub_skill_lv50}}', 
                'sub_skill_lv75'=>'{{$opc->sub_skill_lv75}}', 
                'sub_skill_lv100'=>'{{$opc->sub_skill_lv100}}', 
                'personality'=>'{{$opc->personality}}', 
                'remarks'=>'{{$opc->remarks}}', 
                'created_at'=>'{{$opc->created_at}}', 
                'updated_at'=>'{{$opc->updated_at}}'
            ],
            <p></p>
        @endforeach
    @endif
</div>
