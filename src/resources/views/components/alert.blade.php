@props(['value']) <!-- ここで 'type' 属性を受け取る -->

<div>
    {{$value}}
    {{ $slot }}
</div>