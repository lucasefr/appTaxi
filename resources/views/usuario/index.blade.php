@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Taxistas <a href="usuarios/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('usuario.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
                    <th>Email</th>
					
					<!--<th>Opções</th>-->
				</thead>
                @foreach ($usuarios as $user)
				<tr>
					<td>{{ $user->idUsuarios}}</td>
					<td>{{ $user->nome}}</td>
					<td>{{ $user->telefone}}</td>
					
				</tr>
				
				@endforeach
			</table>
			{{$usuarios->render()}}
		</div>
		
	</div>
</div>

@stop