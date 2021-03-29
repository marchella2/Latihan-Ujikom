<body style="font-family: sans-serif" onload="window.print()">
<center>
    <table width="94%" border="0">
        <tr>
            <td rowspan="4" width="10%">
                <center><div><img src="{{ asset('img/logo.png') }}" width="100px"></div></center>
            </td>
            <td>
                <b>PENDAFTARAN PESERTA DIDIK BARU</b><br>
                <b>SMK WIKRAMA BOGOR T.P. 2020-2021</b><br>
            </td>
        </tr>

    </table>
</center>
<br>
    <center><b>BUKTI PENDAFTARAN</b></center>
    <br>
    <table width="55%" border="0" style="margin-left:3%;margin-right:2%;float:left">
        <tr>
            <td colspan="3" style="background-color: lightgray"><center><b>BIODATA CALON PESERTA DIDIK</b></center></td>
        </tr>
        <tr>
            <td width="30%"><b>NOMOR PENDAFTARAN</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->id }}</td>
        </tr>
        <tr>
            <td width="30%"><b>TANGGAL DAFTAR</b></td>
            <td width="3%">:</td>
            <td>{{ Carbon\Carbon::parse($siswa->created_at)->isoFormat('DD MM YYYY') }}</td>
        </tr>
        <tr>
            <td width="30%"><b>NAMA LENGKAP</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->nama }}</td>
        </tr>
        <tr>
            <td width="30%"><b>JENIS KELAMIN</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->jk }}</td>
        </tr>
        <tr>
            <td width="30%"><b>NIS</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->nis }}</td>
        </tr>
        <tr>
            <td width="30%"><b>TEMPAT LAHIR</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->tempat_lahir }}</td>
        </tr>
        <tr>
            <td width="30%"><b>TANGGAL LAHIR</b></td>
            <td width="3%">:</td>
            <td>{{ Carbon\Carbon::parse($siswa->tanggal_lahir)->isoFormat('DD MM YYYY') }}</td>
        </tr>
        <tr>
            <td width="30%"><b>ALAMAT</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->alamat }}</td>
        </tr>
        <tr>
            <td width="30%"><b>ASAL SEKOLAH</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->asal_sekolah }}</td>
        </tr>
        <tr>
            <td width="30%"><b>KELAS</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->kelas }}</td>
        </tr>
        <tr>
            <td width="30%"><b>JURUSAN</b></td>
            <td width="3%">:</td>
            <td>{{ $siswa->jurusan }}</td>
        </tr>
    </table>
    <table width="37%" border="0">
        <tr>
            <td colspan="3" style="background-color: lightgray"><center><b>CATATAN</b></center></td>
            <tr>
                <td>HARAP SIMPAN BUKTI PEMDAFTARAN INI DENGAN SEBAIK-BAIKNYA.</td>
            </tr>
        </tr>
    </table>
</body>
