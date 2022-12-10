@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <h1 class="mt-3">Home</h1>
                </div> 
            </div>
            <div class="kartu col-lg-3">
                <div class="card">
                    <div class="card-header">
                      Trainer
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Trainer</h5>
                      <p class="card-text">Masukan nama trainer, update ataupun hapus </p>
                      <a href="{{ route('trainer.index')}}" class="btn btn-secondary">Lihat Data</a>
                    </div>
                  </div>
            </div>
            <div class="kartu col-lg-3">
                <div class="card">
                    <div class="card-header">
                      Trainee
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Trainee</h5>
                      <p class="card-text">Masukan nama trainer, update ataupun hapus</p>
                      <a href="{{ route('trainee.index')}}" class="btn btn-secondary">Lihat Data</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection