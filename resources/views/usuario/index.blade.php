@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Taxistas <a href="usuarios/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('usuario.search')
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
                @foreach ($usuarios as $usuarios)
				<tr>
					<td>{{ $usuarios->idAparelho}}</td>
					<td>{{ $usuarios->nome}}</td>
					<td>{{ $usuarios->email}}</td>
					<td id="salvar">
						<<a href="{{URL::action('UsuarioController@edit',$usuarios->idUsuarios)}}"><button class="btn btn-info">Editar</button></a>
                        {!!Form::Open(['method'=>'DELETE', 'url'=>'/usuarios/'.$usuarios->idUsuarios])!!}
                        <button type="submit" class="btn btn-danger">Excluir</button></a>
                        {!!Form::Close()!!}
					</td>
				</tr>
				
				@endforeach
			</table>
		</div>
		
	</div>
</div>

@stop