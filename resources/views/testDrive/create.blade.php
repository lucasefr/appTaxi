@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Cadastro Test Drive</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif

        {!!Form::open(array('url'=>'testDrives','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="concessionarias">Concessionaria</label><br>
            <select name="concessionaria_id" id="concessionaria_id">
                <option value="1">Concessionaria 1</option>
                <option value="2">Concessionaria 2</option>
                <option value="3">Concessionaria 3</option>
                <option value="4">Concessionaria 4</option>
            </select>
                
            
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <label for="data">Data</label>
            <input type="date" name="data" class="form-control" placeholder="Tel...">
        </div>
        
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>

        {!!Form::close()!!}		
        
    </div>
</div>
@stop