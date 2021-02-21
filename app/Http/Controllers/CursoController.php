<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view("cursos.index", compact('cursos'));
    }

    public function create() {
        return view("cursos.create");
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        
        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso) {
        return view("cursos.show", compact('curso'));
    }

    public function edit(Curso $curso) {
        return view("cursos.edit", compact('curso'));
    }

    public function update(Request $request, Curso $curso) {

        $request->validate([
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }
}
