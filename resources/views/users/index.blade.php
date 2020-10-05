@extends('layouts.app')
@section('title', 'Usuários')
@section('main')
@if(Session::has('mensagem'))
	<div class="alerta verde">
		<span class="close" onclick="this.parentElement.style.display='none'">x</span>
		{{ Session::get('mensagem') }}
	</div>
@endif
<table>
	<thead>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th colspan="3">Acção</th>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td><a href="{{ route('users.show', [$user->id]) }}">Ver</a></td>
			<td><a href="{{ route('users.edit', [$user->id]) }}">Editar</a></td>
			<td>
				<form action="{{ route('users.destroy', [$user->id]) }}" method="post">
					@csrf
					@method('delete')
					<button>Remover</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<br>
<a class="btn" href="{{ route('users.create') }}">Novo Usuário</a>

@endsection