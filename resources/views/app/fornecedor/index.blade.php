<h3>Fornecedor</h3>

{{-- @php
    /*
    if(){

    }else if (){

    }else{

    }
    */
@endphp --}}


{{-- 
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados </h3>
@else 
    <h3>Ainda não existem fornecedores cadastrados </h3>
@endif --}}



@php
/*
if (!condicao) {} //enquanto execcuta se o resultado for true
*/
@endphp


{{-- @unless execyta se o retorno for false --}}

{{--
@if(!($fornecedores[0]['status'] == 'S')) {{-- exemplo utilizando a negação comum de if 
    Forncedor inativo.
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') {{--se o retorno da condição for false //exemplo utilizando @unless 
    Forncedor inativo.
@endunless
--}}

    {{-- @isset($fornecedores[0]['cnpj'])
        Cnpj: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset --}}

{{-- @empty($teste)
    - Vazio
@endempty --}}
    {{-- @switch ($fornecedores[0]['ddd'])
        @case('11')
            Sao Paulo - SP
                @break
        @case('85')
            Fortaleza - CE
                @break
        @case('32')
            Juiz de Fora - MG
                @break
        @default
            Estado não identificado
    @endswitch --}}

{{-- @isset($fornecedores) UTILIZANDO FOR
        @for($i = 0; isset($fornecedores[$i]); $i++)
            Fornecedor: {{ $fornecedores[$i]['nome'] }}
            <br>
            Status: {{ $fornecedores[$i]['status'] }}
            <br>
            Cnpj: {{ $fornecedores[$i]['cnpj'] ?? 'Cnpj não preenchido' }}
            <br>
            Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
            <hr>
        @endfor
@endisset --}}

{{-- @isset($fornecedores) UTILIZANDO WHILE
    @php $i = 0; @endphp
    @while(isset($fornecedores[$i]))
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    Cnpj: {{ $fornecedores[$i]['cnpj'] ?? 'Cnpj não preenchido' }}
    <br>
    Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
    <hr>
    @php $i++; @endphp
    @endwhile
@endisset --}}

{{-- @isset($fornecedores) UTILIZANDO FOREACH
    @foreach ( $fornecedores as $indice => $fornecedor)
        @php $fornecedor[$indice]['nome'] = 'Casao' @endphp
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        Cnpj: {{ $fornecedor['cnpj'] ?? 'Cnpj não preenchido' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach

@endisset --}}