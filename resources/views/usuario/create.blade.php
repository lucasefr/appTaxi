@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Cadastro Taxista</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif

        {!!Form::open(array('url'=>'usuarios','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome...">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <label for="email">Email</label><br>
            <input type="email" name="email" class="form-control" placeholder="email...">
        </div>
        <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <label for="idAparelho">idAparelho</label>
            <input type="text" name="idAparelho" class="form-control" placeholder="IdAparelho...">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="placaDoCarro">Placa do Carro</label>
            <input type="text" name="placaDoCarro" class="form-control" placeholder="Placa...">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="Tel...">
        </div>
        
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>

        {!!Form::close()!!}		
        
    </div>
</div>
@stop