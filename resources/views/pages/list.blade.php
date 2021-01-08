@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                {{ __('Lista de usuarios GitHub') }}
                            </div>
                            <div class="col-md-4 text-right"><button class="btn btn-success" data-toggle="modal"
                                    data-target="#Add">Buscar Novo usuario</button></div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('sucess'))
                            <div class="alert alert-success" role="alert">
                                {{ session('sucess') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Avatar</td>
                                    <td>User</td>
                                    <td>Link Pag Git</td>
                                    <td class="text-right">Ação</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gitUsers as $gitUser)
                                    <tr>
                                        <td><img class="img-fluid rounded-circle" width="50"
                                                src="{{ $gitUser->avatar_url }}" alt=""></td>
                                        <td>{{ $gitUser->login }}</td>
                                        <td><a target="_blank" href="{{ $gitUser->html_url }}">{{ $gitUser->html_url }}</a></td>
                                        <td class="text-right">
                                            <a href="{{ route('Profile', $gitUser->id) }}">
                                                <button class="btn btn-primary">Perfil Completo</button>
                                            </a>
                                            <a href="{{ route('ProfileDelete', $gitUser->id) }}"
                                                onclick="return confirm('Todas as inforamções de {{ $gitUser->login }} serão apagadas, confirmar?')">
                                                <button class="btn btn-danger">Excluir</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Busca por novo User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('Search') }}" method="POST">
                        @csrf

                        <label for="">Usuario</label>
                        <input type="text" name="user" class="form-control">

                        <button type="submit" class="btn btn-primary mt-3">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
