@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{ route('trainee.update', $trainee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="trainerid" class="form-label">Trainer</label>
                        <select class="form-select" id="trainerid" aria-label="Default select example"
                            name="trainer_id" value="{{ $trainee->trainer_id }}">
                            @foreach($trainers as $trainer)
                            <option value="{{ $trainer->id }}">{{ $trainer->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">trainee Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $trainee->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur trainee</label>
                        <input type="text" class="form-control" id="umur" name="umur"
                            value="{{ $trainee->umur }}">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Edit Trainee</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection