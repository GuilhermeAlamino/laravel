@extends('layouts.includes.header')

@section('titulo', 'Configuração')

@section('conteudo')

    @include('layouts.components.nav-bar')

    @include('layouts.components.nav')


    <div class="container-fluid content-home">
        <div class="title-list">
            <h5 class="my-5">Em Breve...</h5>
        </div>
{{-- 
        <div class="row p-0 m-0">
            <div class="card-deck">
                @foreach ($lists as $list)
                    <div class="card">
                        <img src="{{ asset($list->imagem) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $list->nome }}</h5>
                            <p class="card-text">{{$list->sobrenome}}</p>
                            <p class="card-text">{{$list->cpf}}</p>
                            <p class="card-text">{{$list->email}}</p>
                            <p class="card-text">{{$list->telefone}}</p>
                            <p class="card-text">{{$list->adress}}</p>
                            <p class="card-text">{{$list->rua}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 p-0 m-0 paginate-center mt-4">
                {{$lists->links()}}
            </div>
        </div> --}}
    </div>

@endsection