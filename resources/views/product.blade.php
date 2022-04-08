@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <div class="caixa">
        <p>TESTANDO PARAMETRO OPCIONAL</p>
        @if($id != null)
            <p>Exibindo o produto id: {{$id}}</p>
        @endif

    </div>    
@endsection