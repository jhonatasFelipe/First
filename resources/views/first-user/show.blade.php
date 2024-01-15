@extends('layouts.default')

@section('content')
        <form action="/users/insert" method="POST">
            <input 
                name='name' 
                placeholder="Nome"
                type="text"
                class ="@error('name') invalid @enderror"
            />
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input 
                name='email' 
                placeholder="e-mail"
                type="text"
                class ="@error('email') invalid @enderror"
            />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input 
                name='password' 
                placeholder="senha"
                type="password"
                class ="@error('password') invalid @enderror"
            />
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input 
                name='password_confirm' 
                placeholder="confirmação senha"
                type="password"
                class ="@error('password_confirm') invalid @enderror"

            />
            @error('password_confirm')
                <div class="alert alert-warn">{{ $message }}</div>
            @enderror
            @csrf

            <button type="submit">Cadastrar</button>
            <button type="reset">Cancelar</button>
        </form>
@endsection

