@extends('mahasiswaView.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Mahasiswa Data</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('mahasiswaView.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{-- potential error --}}
                <strong>NIM:</strong> &nbsp {{$mhs->nim}}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{-- potential error --}}
                <strong>Nama:</strong> &nbsp {{$mhs->nama}}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{-- potential error --}}
                <strong>Jurusan:</strong> &nbsp {{$mhs->jurusan}}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{-- potential error --}}
                <strong>Alamat:</strong> &nbsp {{$mhs->alamat}}

            </div>
        </div>
    </div>
@endsection
