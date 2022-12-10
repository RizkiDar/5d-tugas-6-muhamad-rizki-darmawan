<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\TraineeController;

class TrainerController extends Controller
{
    public function index(){
        $trainers = Trainer::latest()->paginate(5);

        return view('trainer.index', compact('trainers'))->with('i', (request()->input('page', 1) - 1 ) * 5);
    }
    public function create(){
        return view('trainer.create');
    }
    public function store(Request $request){
        $request->validate([
            'nama'=> 'required',
        ]);
        Trainer::create($request->all());

        return redirect()->route('trainer.index')->with('Berhasil', 'Berhasil menambahkan Trainer');
    }
    public function show(Trainer $trainer){
        return view('trainer.show', compact('trainer'));

    }
    public function edit(Trainer $trainer){
        return view('trainer.edit', compact('trainer'));

    }
    public function update(Request $request, Trainer $trainer){
        $request->validate([
            'nama'=>'required',
        ]);

        $trainer->update($request->all());

        return redirect()->route('trainer.index')->with('Berhasil', 'Berhasil memperbarui Trainer');

    }
    public function destroy(Trainer $trainer){
        $trainer->delete();

        return redirect()->route('trainer.index')->with('Berhasil menghapus Trainer');

    }
}
