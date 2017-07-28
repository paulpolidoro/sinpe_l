@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('register') }}">Criar novo</a>
        <hr>
        <table class="table table-bordered">
            <thead>
            <tr><th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Criação</th>
                <th>Última modificação</th>
                <th>#</th>
                <th>#</th>
            </tr>
            </thead>
            @foreach($users as $u)
                <tr>
                    @if($u->lock)
                        <td><i class="glyphicon glyphicon-remove text-danger" title="Usuário bloqueado"></i></td>
                    @else
                        <td><i class="glyphicon glyphicon-ok text-success" title="Usuário desbloqueado"></i></td>
                    @endif
                    <td>
                        <a href="#">
                            {{$u->name}}
                        </a>
                    </td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->created_at}}</td>
                    <td>{{$u->updated_at}}</td>
                    <td align="center">
                        <a href="#">
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>
                    </td>
                    <td align="center">
                        <a href="#">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop