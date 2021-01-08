<?php

namespace App\Http\Controllers;

use App\Models\Github;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Psr\Http\Client\ClientInterface;

class GithubController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function List()
    {
        $gitUsers = Github::all();
        return view('pages.list', compact('gitUsers'));
    }

    public function Search(Request $request)
    {
        $filter = Str::slug($request->user, '-');

        $response = Http::get('https://api.github.com/users/' . $filter);

        if($response->json('message')){
            return redirect()->route('list')->with('error', 'Esse Cadastro não existe, verifique o nome do usuario');
        }

        $verify = Github::find($response->json('id'));

        if (isset($verify)) {

            return redirect()->route('list')->with('error', 'Este usuario ja segue em nossa base de dados!');
            //  dd($response->json());

        } else {

            Github::create($response->json());
            return redirect()->route('list')->with('sucess', 'Novo usuario Cadastrado');
        }
    }

    public function Profile($id){
        $verify = Github::find($id);

        if(!$verify){
            return redirect()->route('list')->with('error', 'Usuario não encontrado!');
        }else{
            return view('pages.profile', compact('verify'));

        }
    }

    public function ProfileDelete($id){
        $verify = Github::find($id);

        if(isset($verify)){
            $verify->delete();
            return redirect()->route('list')->with('sucess', 'Cadastro Excluido!');
        }else{
            return redirect()->route('list')->with('error', 'Usuario nao encontrado');
        }
    }
}
