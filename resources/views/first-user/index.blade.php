
@extends('layouts.default')

@section('content')
    <h1>lista de usuários cadastrados</h1>

    @foreach($users as $user)
        <h1>{{$user->name}}</h1>
        <h1>{{$user->id}}</h1>
        <a ></a>
    @endforeach
@endsection


 