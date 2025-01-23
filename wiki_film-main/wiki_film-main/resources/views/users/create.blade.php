@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer un Utilisateur</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="role">Rôle</label>
            <select name="role" id="role" class="form-control">
                <option value="user">Utilisateur</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Créer</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
