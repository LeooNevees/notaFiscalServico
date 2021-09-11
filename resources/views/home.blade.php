@extends('layout.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card mt-5 text-center boxShadowSecondary">
                <h5 class="card-header text-success">Acesso</h5>
                <div class="card-body">
                    <h5 class="card-title">Bem-vindo!!</h5>
                    <p class="card-text mt-5">Este sistema foi desenvolvido para fins de gerenciamento de Notas Fiscais de Serviços emitidas na Prefeitura de Bauru.</p>
                    <h6 class="card-title mt-5">Faça seu Login para saber mais...</h6>
                    <a href="{{route('login.index')}}" class="btn btn-primary mt-4">Bora lá?</a>
                </div>
            </div>
        </div>
    </div>
@endsection