@extends('layouts.app')
@section('page-title')
{{ $user->name }}
@endsection
@section('title')
{{ $user->name }}
@endsection
@section('main')
<ul class="detalhes">
	<li><span>ID - {{ $user->id }} </span></li>
	<li><span>NOME - {{ $user->name }} </span></li>
	<li><span>E-EMAIL - {{ $user->email }} </span></li>
	<li><span>ESTADO - {{ $user->active }} </span></li>
</ul>
<a class="btn" href="{{ route('users.index') }}">Lista de Usuários</a>
@endsection