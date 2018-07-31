@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Novo Cliente</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif

        {!!Form::open(array('url'=>'concessionarias','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome...">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <label for="endereco">Endereco</label><br>
            <input type="text" name="endereco" class="form-control" placeholder="Rua...">
        </div>
        <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <label for="numero">N°</label>
            <input type="text" name="numero" class="form-control" placeholder="Numero...">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" placeholder="Bairro...">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" placeholder="Complemento...">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" placeholder="Cidade...">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <label for="uf">UF</label>
            <input type="text" name="uf" class="form-control" placeholder="UF...">
        </div>
       <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="form-control" placeholder="CEP...">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="Telefone...">
        </div>
        <
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>

        {!!Form::close()!!}		
        
    </div>
</div>
@stop