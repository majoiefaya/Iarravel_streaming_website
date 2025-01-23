<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{
    public function index()
        {
            if (!Gate::allows('access-admin')) {
                abort(403, 'Vous n\'avez pas accès à cette page.');
            }

            $users = User::all();
            return view('users.index', compact('users'));
        }

    public function create()
    {
        if (!Gate::allows('access-admin')) {
            abort(403, 'Vous n\'avez pas accès à cette page.');
        }
    
        return view('users.create');
    }

    public function store(Request $request)
    {
        
    if (!Gate::allows('access-admin')) {
        abort(403, 'Vous n\'avez pas accès à cette page.');
    }

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => $request->role ?? 'user', // Par défaut, 'user'
    ]);

    return redirect()->route('users.index')->with('success', 'Utilisateur créé avec succès.');
    }

    public function edit(User $user)
    {
       
    if (!Gate::allows('access-admin')) {
        abort(403, 'Vous n\'avez pas accès à cette page.');
    }

    return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        if (!Gate::allows('access-admin')) {
            abort(403, 'Vous n\'avez pas accès à cette page.');
        }
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy(User $user)
    {
        if (!Gate::allows('access-admin')) {
            abort(403, 'Vous n\'avez pas accès à cette page.');
        }
    
        $user->delete();
    
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }
}

