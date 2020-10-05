<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // exibe a lista de usuários
    public function index(){
    	$users = User::where('active', 1)->get();
    	return view('users.index')->with('users', $users);
    }

    // exibe o formulário para a criação de um novo usuário
    public function create(){
    	return view('users.create');
    }

    // exibe um usuário específico
    public function show($id){
    	$user = User::where('active', true)->where('id', $id)->first();
    	return view('users.show')->with('user', $user);
    }

    public function store(Request $request){
    	$user = new User();
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = $request->input('password');

    	$exists = User::where('email', $user->email)->first();
    	if($exists){
    		return redirect()->route('users.create')->withErrors('Este email já existe.');
    	}

    	$user->save();
    	return redirect()->route('users.index')->with('mensagem', 'Usuário salvo com sucesso!');
    }

    // exibe o formulário de edição
    public function edit($id){
    	$user = User::where('id', $id)->first();
    	return view('users.edit')->with('user', $user);
    }

    // actualiza o usuário
    public function update(Request $request, $id){
    	$email = $request->input('email');
    	$user = User::find($id);

    	if ($user) {
    		if($user->email != $email){
    			return redirect()
    			->route('users.edit', [$id])
    			->withInput()
    			->withErrors('Este email já existe');
    		}
    	}

    	$user->name = $request->input('name');
    	$user->password = $request->input('password');
    	$user->update();
    	return redirect()->route('users.index')->with('mensagem', 'Usuário actualizado com sucesso!');
    }

    // remover usuário
    public function destroy($id){
    	User::findOrFail($id)->delete();
    	return redirect()->route('users.index')->with('mensagem', 'Usuário removido com sucesso!');
    }


}
