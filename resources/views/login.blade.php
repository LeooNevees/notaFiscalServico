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
    </div>
@endsection