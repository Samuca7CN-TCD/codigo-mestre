<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Curso;
use App\Models\User;
use App\Models\Categoria;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = null;
        $usuario_categorias = null;
        $categorias = null;
        $lista_categorias = null;
        $user = auth()->user();

        if($user->id === 1){
            $clientes = User::with('cursos')->where('users.id', '>', 1)->get();
            $categorias = Categoria::with('cursos')->get();
            $lista_categorias = Categoria::all();
        }else{
            $usuario_categorias = $user->cursos;

            $usuario_cursos_ids = $user->cursos->pluck('id')->toArray();
            $categorias = Categoria::with(['cursos' => function ($query) use ($usuario_cursos_ids) {
                $query->whereNotIn('id', $usuario_cursos_ids);
            }])->get();
        }   

        //$clientes = User::where('id', '>', 1)->get();

        return Inertia::render('Dashboard', [
            'clientes' => $clientes,
            'categorias' => $categorias,
            'usuario_categorias' => $usuario_categorias,
            'lista_categorias' => $lista_categorias,
            'user_id' => $user->id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
