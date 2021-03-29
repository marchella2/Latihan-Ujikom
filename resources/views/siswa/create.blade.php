<div class="container register-form">
    <div class="card mx-5 my-5">
        <section class="note">
            <div class="logo px-4">
                <img src="{{ asset('img/logo.png') }}" width="100px" height="100px">
            </div>
            <div class="title">
                <h4>Form Pendaftaran Siswa Baru</h4>
                <p>Silahkan isi data diri anda dengan sesuai.</p>
            </div>
        </section>
        <div class="form-content">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong>Terdapat kesalahan input.<br>
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $errors }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{  route('siswa.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="nis">NIS</label>
                        <input type="number" id="nis" name="nis" class="form-control" placeholder="Masukkan NIS anda">
                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label" for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap anda">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col-md-4">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option>-- Pilih jenis kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir anda anda">
                    </div>

                    <div class="form-group col-md-4">
                        <label class="form-label" for="nama">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col-md-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" placeholder="Masukkan alamat anda" class="form-control" cols="30" rows="3"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col-md-5">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" id="asal_sekolah" name="asal_sekolah" class="form-control" placeholder="Masukkan asal sekolah anda">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="number" id="kelas" name="kelas" class="form-control" placeholder="Masukkan kelas anda">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option>-- Pilih Jurusan --</option>
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
                <button type="submit" class="btnSubmit">Submit</button>
                <button type="reset" class="btnReset">Reset</button>
                <a href="{{ route('home') }}" class="btnDelete">Back</a>
            </form>
        </div>
    </div>
</div>
