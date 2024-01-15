
@extends('layouts.default')

@section('content')

    <div class='content-list'>

        <a href="{{route('form_user')}}" class="link-insert">Novo Usuário</a>
        <h1>lista de usuários cadastrados</h1>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Identificador</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


 