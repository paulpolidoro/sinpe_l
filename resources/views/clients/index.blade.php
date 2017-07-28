@extends('layouts.app')

@section('content')
    <div class="container">
        @if(empty($clients))
            <div class="alert alert-info">Não há clientes cadastrados!</div>
        @else
            <table class="table table-bordered">
                @foreach($clients as $client)
                    <tr>
                        <td>{{\App\Sinpe\Mask::create($client->cnpj, \App\Sinpe\Mask::$MASK_CNPJ)}}</td>
                        <td><a href="{{action('ClientsController@details', $client->id)}}">{{$client->name}}</a></td>
                        <td>{{\App\Sinpe\DateView::timestamp($client->updated_at)}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
        <div class="text-center">
            {{$clients->links()}}
        </div>
    </div>
@stop