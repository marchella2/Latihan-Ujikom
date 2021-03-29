@extends('layouts.app')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="col-md-3 col-form-label" for="text-input">NIS</label>
                            <input class="form-control" id="nis" type="number" name="nis"
                                value="{{ $siswa->nis }}" placeholder="Masukkan NIS anda">
                        </div>

                        <div class="col-md-4">
                            <label class="col-md-3 col-form-label" for="text-input">Nama Lengkap</label>
                            <input class="form-control" id="nama" type="text" name="nama"
                                value="{{ $siswa->nama }}" placeholder="Masukkan nama anda">
                        </div>

                        <div class="col-md-4">
                            <label class="col-md-3 col-form-label">Jenis Kelamin</label>
                            <select class="form-control" id="jk" name="jk">
                                <option value="{{ $siswa->jk }}">{{$siswa->jk}}</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                        <label class="col-md-3 col-form-label" for="text-input">Tempat Lahir</label>
                            <input class="form-control" id="tempat_lahir" type="text" name="tempat_lahir"
                                value="{{ $siswa->tempat_lahir }}" placeholder="Masukkan tempat lahir anda">
                        </div>

                        <div class="col-md-6">
                            <label class="col-md-3 col-form-label" for="text-input">Tanggal Lahir</label>
                            <input class="form-control" id="tanggal_lahir" type="date" name="tanggal_lahir"
                                value="{{ $siswa->tanggal_lahir }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" placeholder="Masukkan alamat anda" class="form-control" cols="30" rows="3">{{ $siswa->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="col-md-3 col-form-label" for="text-input">Asal Sekolah</label>
                            <input class="form-control" id="asal_sekolah" type="text" name="asal_sekolah"
                                value="{{ $siswa->asal_sekolah }}" placeholder="Masukkan asal sekolah anda">
                        </div>

                        <div class="col-md-4">
                            <label class="col-md-3 col-form-label" for="text-input">Kelas</label>
                            <input class="form-control" id="kelas" type="number" name="kelas"
                                value="{{ $siswa->kelas }}" placeholder="Masukkan kelas anda">
                        </div>

                        <div class="col-md-4">
                            <label class="col-md-3 col-form-label">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="{{ $siswa->jurusan }}">{{$siswa->jurusan}}</option>
                                <option value="otkp">OTKP (Otomatisasi Tata Kelola Perkantoran)</option>
                                <option value="rpl">RPL (Rekayasa Perangkat Lunak)</option>
                                <option value="tkj">TKJ (Teknik Komputer dan Jaringan)</option>
                                <option value="mmd">MMD (Multimedia)</option>
                                <option value="bdp">BDP (Bisnis Daring dan Pemasaran)</option>
                                <option value="tbg">TBG (Tata Boga)</option>
                                <option value="htl">HTL (Perhotelan)</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-primary" type="submit"> Simpan</button>
                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
