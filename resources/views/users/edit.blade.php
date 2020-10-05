@extends('layouts.app')
@section('page-title', 'Editar Usuário')
@section('title', 'Editar Usuário')
@section('main')
@if($errors->any() )
	<ul>
		@foreach($errors->all() as $error)
			{{ $error }}
		@endforeach
	</ul>
@endif
<form method="post" role="form" action="{{ route('users.update', [$user->id]) }}">
	@method('put')
	@csrf
	<input type="hidden" name="id" value="{{ $user->id }}">
	<label for="name">Nome</label>
	<input type="text" name="name" value="{{ $user->name }}" required="required" placeholder="Nome">
	<label for="email">Email</label>
	<input type="email" name="email" value="{{ $user->email }}" required="required" placeholder="E-mail">
	<label for="password">Password</label>
	<input type="password" name="password" value="{{ $user->password }}" required="required" placeholder="Password">
	<button class="btn" name="save" type="submit">Salvar</button>
</form>
@endsection