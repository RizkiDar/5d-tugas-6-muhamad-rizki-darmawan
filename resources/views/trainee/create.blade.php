@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{ route('trainee.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="trainerid" class="form-label">Trainer</label>
                        <select class="form-select" id="trainerid" aria-label="Default select example"
                            name="trainer_id">
                            <option selected disabled>Pilih Trainer</option>
                            @foreach($trainers as $trainer)
                            <option value="{{ $trainer->id }}">{{ $trainer->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama trainee</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur trainee</label>
                        <input type="text" class="form-control" id="umur" name="umur">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Buat trainee</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection