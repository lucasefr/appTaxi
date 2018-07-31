@extends('layouts.app')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Taxistas <a href="usuarios/create"><button class="btn btn-success">Novo</button></a></h3>
		<!--@include('usuarios.search')-->
	</div>
</div>

<div class="row" onload="teste()">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
                    <th>Email</th>
					
					<!--<th>Opções</th>-->
				</thead>
               @foreach ($taxista as $usuarios)
				<tr>
					<td>{{ $usuarios->id}}</td>
					<td>{{ $usuarios->name}}</td>
					<td>{{ $usuarios->email}}</td>
					<!--<td id="salvar">
						<<a href="{{URL::action('UsuariosController@edit',$users->id)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="#" data-target="#modal-delete-{{$users->id}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
						 
					</td>-->
				</tr>
				<!--@include('usuarios.modal')-->
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
	</div>
</div>

@stop