@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>
                    Edit Data Siswa
                </h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <form action="{{ route('siswa.update',$siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <strong>NIS</strong>
                        <input type="number" name="nis" value="{{ $siswa->nis }}" class="form-control" placeholder="Masukkan NIS anda">
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" placeholder="Masukkan nama anda">
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <strong>Jenis Kelamin</strong>
                        <select class="form-control" id="jk" name="jk">
                            <option value="{{ $siswa->jk }}">{{$siswa->jk}}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Tempat Lahir</strong>
                        <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control" placeholder="Masukkan tempat lahir anda">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Tanggal Lahir</strong>
                        <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="form-control" placeholder="Masukkan tanggal lahir anda">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat</strong>
                        <textarea name="alamat" id="alamat" placeholder="Masukkan alamat anda" class="form-control" cols="30" rows="3">{{ $siswa->alamat }}</textarea>
                    </div>
                </div>

                <div class="col-xs-5 col-sm-5 col-md-5">
                    <div class="form-group">
                        <strong>Asal Sekolah</strong>
                        <input type="text" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" class="form-control" placeholder="Masukkan asal sekolah SMP anda">
                    </div>
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        <strong>Kelas</strong>
                        <input type="number" name="kelas" value="{{ $siswa->kelas }}" class="form-control" placeholder="Masukkan kelas anda">
                    </div>
                </div>

                <div class="col-xs-5 col-sm-5 col-md-5">
                    <div class="form-group">
                        <strong>Jurusan</strong>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="{{ $siswa->jurusan }}">{{$siswa->jurusan}}</option>
                            <option value="OTKP (Otomatisasi Tata Kelola Perkantoran)">OTKP (Otomatisasi Tata Kelola Perkantoran)</option>
                            <option value="RPL (Rekayasa Perangkat Lunak)">RPL (Rekayasa Perangkat Lunak)</option>
                            <option value="TKJ (Teknik Komputer dan Jaringan)">TKJ (Teknik Komputer dan Jaringan)</option>
                            <option value="MMD (Multimedia)">MMD (Multimedia)</option>
                            <option value="BDP (Bisnis Daring dan Pemasaran)">BDP (Bisnis Daring dan Pemasaran)</option>
                            <option value="TBG (Tata Boga)">TBG (Tata Boga)</option>
                            <option value="HTL (Perhotelan)">HTL (Perhotelan)</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('siswa.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>


        </form>
    </div>
@endsection
