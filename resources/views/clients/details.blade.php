@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="javascript:history.go(-1)"><h4>Voltar</h4></a>
    </div>
    <div class="container breadcrumb" style="padding: 30px;">
        <!--Edit client form-->
        <form method="post" action="{{action('ClientsController@saveEdit')}}">
            <!--Client data-->
            <div class="row">
                <h4 class="page-header">Clente {{$client->id}}</h4>

                <div class="col-xs-4">
                    <label for="cnpj">CNPJ</label>
                    <input name="cnpj" id="cnpj" type="text" class="form-control" maxlength="18" value="{{$client->cnpj}}"/>
                </div>

                <div class="col-xs-4">
                    <label for="name">Razão social</label>
                    <input name="name" id="name" type="text" class="form-control" value="{{$client->name}}"/>
                </div>

                <div class="col-xs-4">
                    <label for="fantasy_name">Nome fantasia</label>
                    <input type="hidden" name="id" value="{{$client->id}}" />
                    <input name="fantasy_name" id="fantasy_name" type="text" class="form-control" value="{{$client->fantasy_name}}"/>
                </div>
            </div>

            <!--Address data-->
            <div class="row">
                <h4 class="page-header">Endereço</h4>

                <div class="col-xs-2">
                    <label for="cep">CEP</label>
                    <input name="cep" id="cep" type="text" class="form-control" maxlength="18" value="{{$client->cep}}" />
                </div>

                <div class="col-xs-10">
                    <label for="address">Endereço</label>
                    <input name="address" id="address" type="text" class="form-control" value="{{$client->address}}"/>
                </div>

                <div class="col-xs-4">
                    <label for="state">Estado</label>
                    <input name="state" id="state" type="text" class="form-control" value="{{$client->state}}"/>
                </div>

                <div class="col-xs-4">
                    <label for="city">Cidade</label>
                    <input name="city" id="city" type="text" class="form-control" value="{{$client->city}}"/>
                </div>

                <div class="col-xs-4">
                    <label for="district">Bairro</label>
                    <input name="district" id="district" type="text" class="form-control" value="{{$client->city}}"/>
                </div>
            </div>

            <!--Contact data-->
            <div class="row">
                <h4 class="page-header">Contato</h4>

                <div class="col-xs-4">
                    <label for="contact">Contato</label>
                    <input name="contact" id="contact" type="text" class="form-control" value="{{$client->contact}}"/>
                </div>

                <div class="col-xs-4">
                    <label for="email">E-mail</label>
                    <input name="email" id="email" type="text" class="form-control" value="{{$client->email}}"/>
                </div>

                <div class="col-xs-4">
                    <label for="phone">Telefone</label>
                    <input name="phone" id="phone" type="text" class="form-control" value="{{$client->phone}}"/>
                </div>
            </div>

            <!--Submit data-->
            <div class="row">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <br><br>
                <input type="submit" value="Salvar alterações" class="btn btn-primary pull-right"/>
            </div>
        </form>
    </div>
@endsection