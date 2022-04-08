@extends('layouts.main')


@section ('title', 'Produtos')

@section ('content')
<div class="caixa">
    <h1> Tela de produtos</h1>

    
    @if($busca != "")
            A pesquisa foi: {{$busca}}
        @endif
</div>
@endsection
