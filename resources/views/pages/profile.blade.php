@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="sticky-top mb-5">
                    <img class="mt-3 img-fluid rounded-circle" src="{{ $verify->avatar_url }}" alt="">
                    <center>
                        <a target="_blank" href="{{ $verify->html_url }}">
                            <button class="btn btn-primary mt-3">Acessar pagina GitHub</button>
                        </a>
                        <a href="{{ route('ProfileDelete', $verify->id) }}" onclick="return confirm('Todas as inforamções de {{ $verify->login }} serão apagadas, confirmar?')">
                            <button class="btn btn-danger  mt-3">Excluir</button>
                        </a>
                    </center>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Usuario</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->login }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">id</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->id }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">node_id</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->node_id }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">avatar_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->avatar_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">html_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->html_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">followers_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->followers_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">following_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->following_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">gists_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->gists_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">starred_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->starred_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">subscriptions_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->subscriptions_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">organizations_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->organizations_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">repos_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->repos_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">events_ur</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->events_ur }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">received_events_url</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->received_events_url }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">type</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->type }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">site_admin</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->site_admin }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">name</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">company</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->company }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">blog</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->blog }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">location</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->location }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">email</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->email }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">hireable</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->hireable }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">bio</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->bio }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">twitter_username</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->twitter_username }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">public_repos</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->public_repos }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">public_gists</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->public_gists }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">followers</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->followers }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">following</label>
                                <input type="text" class="form-control mb-3" name="" id="" disabled value="{{ $verify->following }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
