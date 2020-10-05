@extends('layouts.app')
@section('page-title', 'Novo Usuário')
@section('title', 'Novo Usuário')
@section('main')
@if($errors->any() )
	<ul>
		@foreach($errors->all() as $error)
	<div class="alerta vermelho">
		<span class="close" onclick="this.parentElement.style.display='none'">x</span>
		{{ $error }}
	</div>
		@endforeach
	</ul>
@endif
<form method="post" action="{{ route('users.store') }}">
	@csrf
	<label for="name">Nome</label>
	<input type="text" name="name" required="required" placeholder="Nome">
	<label for="email">Email</label>
	<input type="email" name="email" required="required" placeholder="E-mail">
	<label for="password">Password</label>
	<input type="password" name="password" required="required" placeholder="Password">
	<button class="btn" name="save" type="submit">Salvar</button>
</form>
@endsection