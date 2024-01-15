@extends('layouts.default')

@section('content')
        <form action="{{route('create_user')}}" method="POST">
            <input 
                name='name' 
                placeholder="Nome"
                type="text"
                value="{{old('name')}}"
                class ="@error('name') invalid @enderror"
            />
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input 
                name='email' 
                placeholder="e-mail"
                type="text"
                value="{{old('email')}}"
                class ="@error('email') invalid @enderror"
            />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input 
                name='password' 
                placeholder="senha"
                type="password"
                value="{{old('password')}}"
                class ="@error('password') invalid @enderror"
            />
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input 
                name='password_confirm' 
                placeholder="confirmação senha"
                type="password"
                value="{{old('password_confirm')}}"
                class ="@error('password_confirm') invalid @enderror"

            />
            @error('password_confirm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @csrf

            <div class="actions">
                <button type="submit" class="button-blue button">Cadastrar</button>
                <a href="{{route('list_users')}}" class="button-red button">Cancelar</a>
            </div>
            
        </form>
@endsection

