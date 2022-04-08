@extends('layouts.main')

@section('title', 'HDC Events ')


@section('content')

<img src="/img/banner.jpg">
<div class="caixa">
    <Center>
        <h3>Condição simples com retorno true:</h3>
        @if(10 > 5 )
            <p>A condição é true</p>
        @endif

        @if($n1 == 100)
            <p>O valor true da n1 é: {{$n1}}</p>
        @endif

    </Center>
</div>

<div class="caixa">
<center>
    <h3>Condição com else e else if</h3>
    @if( $nome == "Pedro")
        <p> nome da pessoa é: {{$nome}}</p>
    @elseif ($nome == "Paulo")
        <p>o nome da pessoa é <b>{{$nome}}</b> tem <b>{{$idade}}</b> anos e sua profissão é <b>{{$profissao}}</b> </p>
    @else
        <p>O nome da pessoa não é matheus</p>
    @endif
</center>
</div>

<div class="caixa">
    <center>
        <h2> Usando for </h2>
        @for($i = 0; $i < count($arr); $i++)

            <p> {{$arr[$i]}} Posição: {{$i}} </p>


            @if($i == 2 )
                <p> Oi, está no 2</p>
            @endif
        @endfor
    <center>
</div>

<div class="caixa">
    <center>
        @foreach($nomes as $nome)
        <p> {{$loop->index}} -) {{$nome}} </p>
        @endforeach

    </center>
</div>

    <!-- Comentário Html  -->
    {{-- Comentario do blade --}}
@endsection
