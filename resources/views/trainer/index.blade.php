@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <a href="{{ route('trainer.create') }}" class="btn btn-secondary p-3 mb-4">
                    <h5 class="mb-0">Buat Trainer</h5>
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
                            <th scope="col">Nama Trainer</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trainers as $trainer)
                        <tr>
                            <th scope="row" class="text-center">{{ ++$i }}</th>
                            <td>{{ $trainer->nama }}</td>
                            <td class="text-center">
                                <form action="{{ route('trainer.destroy',$trainer->id) }}" method="POST">
                                    
                                    <a href="{{ route('trainer.edit',$trainer->id) }}"
                                        class="btn btn-success">Edit</a>
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
                    {!! $trainers->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection