@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>datas marcadas <a href="testDrives/create"><button class="btn btn-success">Agendamento</button></a></h3>
		
	</div>
</div>

<div class="row" >
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
					<td>{{ $test->idTestDrives}}</td>
					<td>{{ $test->concessionaria_id}}</td>
					<td>{{ $test->data}}</td>
					
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$testDrives->render()}}
	</div>
</div>

@stop