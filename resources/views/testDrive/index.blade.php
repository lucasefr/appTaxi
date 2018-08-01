@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>datas marcadas <a href="testDrives/create"><button class="btn btn-success">Novo</button></a></h3>
		
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
               @foreach ($testDrives as $test)
				<tr>
					<td>{{ $test->id}}</td>
					<td>{{ $test->name}}</td>
					<td>{{ $test->email}}</td>
					<!--<td id="salvar">
						<<a href="{{URL::action('TestDriveController@edit',$users->id)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="#" data-target="#modal-delete-{{$test->id}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
						 
					</td>-->
				</tr>
				<!--@include('testDrives.modal')-->
				@endforeach
			</table>
		</div>
		{{$testDrives->render()}}
	</div>
</div>

@stop