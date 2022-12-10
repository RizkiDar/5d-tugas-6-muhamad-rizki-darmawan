<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\TrainerController;

class TraineeController extends Controller
{
    public function index()
    {
        $trainees = Trainee::latest()->paginate(5);

        return view('trainee.index', compact('trainees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $trainers = Trainer::all();
        return view('trainee.create', compact('trainers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'trainer_id' => 'required',
            'nama' => 'required',
            'umur' => 'required',
        ]);

        Trainee::create($request->all());

        return redirect()->route('trainee.index')
            ->with('Trainee berhasil ditambahkan');
    }

    public function show(Trainee $trainee)
    {
        return view('trainee.show', compact('trainee'));
    }

    public function edit(Trainee $trainee)
    {
        $trainers = Trainer::all();
        return view('trainee.edit', compact('trainee', 'trainers'));
    }

    public function update(Request $request, Trainee $trainee)
    {
        $request->validate([
            'trainer_id' => 'required',
            'nama' => 'required',
            'umur' => 'required',
        ]);

        $trainee->update($request->all());

        return redirect()->route('trainee.index')
            ->with('Trainee berhasil di ubah');
    }

    public function destroy(Trainee $trainee)
    {
        $trainee->delete();

        return redirect()->route('trainee.index')
            ->with('Trainee berhasil dihapus');
    }
}
