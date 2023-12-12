@extends('mahasiswaView.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Operasi di Laravel 10</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('mahasiswaView.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if ($msg = Session::get('Success'))
        <div class="alert alert-success">
            <p>{{$msg}}</p>
        </div>

    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>

        {{-- potential Error --}}
        @forelse ($listMahasiswa as $mhs)
        <tr>
            <td>{{$mhs->id}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td>{{$mhs->alamat}}</td>
            <td>
                <form action="{{route('mahasiswaView.destroy', $mhs->id) }}" method="post">

                <a href="{{route('mahasiswaView.show', $mhs->id)}}" class="btn btn-info">Show</a>
                <a href="{{route('mahasiswaView.edit', $mhs->id)}}" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger ">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <div class="alert alert-danger">
            Data Belum Tersedia
        </div>

        @endforelse


    </table>
    {{$listMahasiswa -> links()}}
@endsection
