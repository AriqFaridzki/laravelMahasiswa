@extends('mahasiswaView.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Mahasiswa Baru</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('mahasiswaView.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger ">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('mahasiswaView.update', $mhs->id) }}" method="post">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIM:</strong>
                        <input type="text" name="nim" id="form-control"
                        value="{{ $mhs->nim }}"></input>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" name="nama" id="form-control"
                        value="{{ $mhs->nama }}"></input>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jurusan:</strong>
                        <input type="text" name="jurusan" id="form-control"
                        value="{{ $mhs->jurusan }}"></input>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        <input type="text" name="alamat" id="form-control"
                        value="{{ $mhs->alamat }}"></input>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>


            </div>
    </form>
@endsection
