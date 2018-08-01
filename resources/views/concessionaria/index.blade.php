@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Concessionarias <a href="concessionarias/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('concessionaria.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
                    <th>Endereço</th>
					<th>N°</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
				</thead>
               @foreach ($concessionarias as $con)
				<tr>
                    <td>{{ $con->idConcessionaria}}</td>
					<td><a href="{{URL::action('ConcessionariaController@show',$con->idConcessionaria)}}">{{ $con->nome}}</a></td>
					<td>{{ $con->endereco}}</td>
                    <td>{{ $con->numero}}</td>
                    <td>{{ $con->bairro}}</td>
                    <td>{{ $con->cidade}}</td>
					
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$concessionarias->render()}}
	</div>
</div>
@stop