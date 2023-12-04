<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class taskscontroller extends Controller
{

    public function liste_tasks()
    {
        $taches = Tasks::all();
        return view('tasks.liste', compact('taches'));
    }

    public function ajouter_tasks()
    {
        return view('tasks.ajouter');
    }

    public function ajouter_tasks_traitement(Request $request)
    {
        $request->validate([
            'NOMS' => 'required',
            'ROLES' => 'required',
        ]);

        $tasks = new Tasks();
        $tasks->NOMS = $request->NOMS;
        $tasks->ROLES = $request->ROLES;
        $tasks->save();

        return redirect('/ajouter')->with('status', 'L\a tache a bien été ajouté.');
    }

    public function update_tasks($id){
        return view('tasks.update');
    }
}
