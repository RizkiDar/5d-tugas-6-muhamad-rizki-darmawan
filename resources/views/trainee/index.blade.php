@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card p-4">
                <a href="{{ route('trainee.create') }}" class="btn btn-secondary p-3 mb-4">
                    <h5 class="mb-0">Buat trainee</h5>
                </a>

                @if ($message = Session::get('success'))
                <div class="alert alert-success mb-4">
                    <p class="mb-0">{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Trainer</th>
                            <th scope="col">Nama trainee</th>
                            <th scope="col">Umur trainee</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trainees as $trainee)
                        <tr>
                            <th scope="row" class="text-center">{{ ++$i }}</th>
                            <td>{{ $trainee->trainers->nama ?? 'None' }}</td>
                            <td>{{ $trainee->nama }}</td>
                            <td>{{ $trainee->umur }}</td>
                            <td class="text-center">
                                <form action="{{ route('trainee.destroy',$trainee->id) }}" method="POST">
                                    <a href="{{ route('trainee.edit',$trainee->id) }}" class="btn btn-success">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    {!! $trainees->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection