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

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        Cnpj: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset

{{-- @empty($teste)
    - Vazio
@endempty --}}