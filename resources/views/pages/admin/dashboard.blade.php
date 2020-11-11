@extends('layouts.admin')
@section('title')
    Admin page
@endsection
@section('content')
    <div class="container-utama">
        <div class="container">
            <h3 class="mb-3">Daftar member Bechat</h3>
            <div class="row">
                <div class="col col-md-7">
                    <table class="table table-bordered text-center bg-white shadow" cellpadding="10" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>AKTIVASI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                                @forelse ($members as $member)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>                                 
                                        @if ($member->statues == 1 )
                                            <form action="{{ route('status.update',$member->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="statues" value="0">
                                                <button class="btn btn-primary btn-sm" type="submit">ACTIVE</button>
                                            </form>                                       
                                        @else
                                            <form action="{{ route('status.update',$member->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="statues" value="1">
                                                <button class="btn btn-danger btn-sm" type="submit">N/A</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <td colspan="5" class="text-center">Belum ada member</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection