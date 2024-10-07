<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/get-pokemon-template.js"></script>

<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <select id="selectPokemonName">
        @if(isset($choice_pokemon))
            @foreach($choice_pokemon as $cp)
                <option>{{$cp->name}}</option>
            @endforeach
        @endif
    </select>
    <button id="test" onclick="getPokemonTemplate()">登録フォーム表示</button>



    @if(session('success-register'))
        <script>
            alert("{{session('success-register')}}");
        </script>
    @endif



    <div id="formWrapper" style="display: none;">
        <form action="{{route('save-choice-pokemon')}}" method="post">
            @csrf
            <div id="registerForm">
                
            </div>

            <button id="register-button" type="submit">登録</button>
        </form>
    </div>
    <input id="hidden-count" type="hidden" name="hidden-count" value="0">
    


    
</div>



