<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @if(isset($result))
        @foreach($result as $r)
            <p>---------------------------------------</p>
            <p>id:{{$r->id}}</p>
            <p>own_pokemon_name:{{$r->own_pokemon_name}}</p>
            <p>sp:{{$r->sp}}</p>
            <p>lv:{{$r->lv}}</p>
            <p>food_lv1:{{$r->food_lv1}}</p>
            <p>food_lv30:{{$r->food_lv30}}</p>
            <p>food_lv60:{{$r->food_lv60}}</p>
            <p>main_skill:{{$r->main_skill}}</p>
            <p>sub_skill_lv1:{{$r->sub_skill_lv1}}</p>
            <p>sub_skill_lv25:{{$r->sub_skill_lv25}}</p>
            <p>sub_skill_lv50:{{$r->sub_skill_lv50}}</p>
            <p>sub_skill_lv75:{{$r->sub_skill_lv75}}</p>
            <p>sub_skill_lv100:{{$r->sub_skill_lv100}}</p>
            <p>personality:{{$r->personality}}</p>
            <p>remarks:{{$r->remarks}}</p>
            <p>created_at:{{$r->created_at}}</p>
            <p>updated_at:{{$r->updated_at}}</p>
            <p>---------------------------------------</p>
        @endforeach
        
    @endif
</div>
