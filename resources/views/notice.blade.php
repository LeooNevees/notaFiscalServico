@extends('layout.site')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="mt-5 text-center text-success">Gerenciamento de NFS-e</h2>
            <div class="col-5 mt-5">
                <div class="card border-success mb-3 text-center boxShadowSuccess">
                    <div class="card-header">Acesso</div>
                    <div class="card-body">
                        <form action="{{route('login.entry')}}" method="POST">
                            {{csrf_field() }}
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                <label for="floatingInput">E-mail</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                                <label for="floatingPassword">Senha</label>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button class="btn btn-success" type="submit">Acessar</button>
                            </div>
                            @if (!empty($mensagem['msg']))
                                <div class="alert alert-danger mt-3" role="alert" style="height: 50px">
                                    {{$mensagem['msg']}}
                                </div>
                            @endif
                            <div class="mt-3">
                                <a href="" class="removeTextDecoration">Esqueceu a Senha? </a>
                            </div>
                            <hr>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button">Criar nova conta</button>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>

        @if (Auth::check()) 
            <div class="container">
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-5 text-center">
                    <div class="col">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header">Valor Total Emitido</div>
                            <div class="card-body">
                                <h5 class="card-title">R$ 15.500,00</h5>
                                <p class="card-text">Soma total das Notas (NF1 à NF-15).</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Valor Emitido 2021</div>
                            <div class="card-body">
                                <h5 class="card-title">R$ 13.500,00</h5>
                                <p class="card-text">Soma total das Notas emitidas no ano atual (NF-10 à NF-15)</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col">
                        <div class="card text-white bg-secondary mb-3" style="min-height: 155px;">
                            <div class="card-header">Notas Emitidas</div>
                            <div class="card-body">
                                <h5 class="card-title">15</h5>
                                <p class="card-text mt-4">Total de Notas Emitidas</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col">
                        <div class="card text-white bg-danger mb-3" style="min-height: 155px;">
                            <div class="card-header">Notas Canceladas</div>
                            <div class="card-body">
                                <h5 class="card-title">1</h5>
                                <p class="card-text mt-4">Total de Notas Canceladas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection