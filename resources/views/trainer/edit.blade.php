@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{ route('trainer.update',$trainer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="catname" class="form-label">Nama Trainer</label>
                        <input type="text" class="form-control" id="catname" name="nama" value="{{ $trainer->nama }}">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Update Trainer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection