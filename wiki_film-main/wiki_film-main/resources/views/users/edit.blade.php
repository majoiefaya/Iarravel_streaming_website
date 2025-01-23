@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Utilisateur</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="role">Rôle</label>
            <select name="role" id="role" class="form-control">
                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Utilisateur</option>
                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Mettre à jour</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection


