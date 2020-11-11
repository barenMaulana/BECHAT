@extends('layouts.app')
@section('title')
    Latihan validation
@endsection
@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('latihan.store') }}" class="form" method="post">
                    @csrf
                    @foreach (range(0,4) as $i)
                        <div class="form-group">
                            <label for="emails-{{ $i }}">Email#{{ $i }}</label>
                        <input type="text" id="emails-{{ $i }}" class="form-control @error('emails.'.$i) is-invalid @enderror" name="emails[]">
                        @error('emails.'.$i)
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    @endforeach
                    <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection