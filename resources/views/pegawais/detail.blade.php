@extends('pegawais.layout')

@section('content')


<body style="background-color: aliceblue;" >
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 40rem">
            <div class="card-header">
                Detail Pegawai
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Foto : </b> <img width="120px" src="{{ url('/data_file/'.$pegawai->foto)}}" > </li>
                    <li class="list-group-item"><b>Nama    : </b> {{ $pegawai->nama}}</li>
                    <li class="list-group-item"><b>Jabatan : </b> {{ $pegawai->jabatan}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin : </b> {{ $pegawai->jk}}</li>
                    <li class="list-group-item"><b>No KTP : </b> {{ $pegawai->noktp}}</li>
                    <li class="list-group-item"><b>NPWP : </b> {{ $pegawai->npwp}}</li>
                    <li class="list-group-item"><b>No Bpjs Kas : </b> {{ $pegawai->nobpjs}}</li>
                    <li class="list-group-item"><b>No KK  : </b> {{ $pegawai->nokk}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir : </b> {{ $pegawai->ttl}}</li>
                    <li class="list-group-item"><b>Alamat KTP : </b> {{ $pegawai->alamatktp}}</li>
                    <li class="list-group-item"><b>Alamat Domisili : </b> {{ $pegawai->domisili}}</li>
                    <li class="list-group-item"><b>Gaji : </b> {{ $pegawai->gaji}}</li>
                    <li class="list-group-item"><b>Tanggal Gajian : </b> {{ $pegawai->tanggalgaji}}</li>
                    <li class="list-group-item"><b>No Rek : </b> {{ $pegawai->norek}}</li>
                    <li class="list-group-item"><b>Bank : </b> {{ $pegawai->bank}}</li>
                    <li class="list-group-item"><b>Email : </b> {{ $pegawai->email}}</li>
                    <li class="list-group-item"><b>No hp : </b> {{ $pegawai->nohp}}</li>
                    <li class="list-group-item"><b>Status : </b> {{ $pegawai->status}}</li>
                    <li class="list-group-item"><b>Tanggungan : </b> {{ $pegawai->tanggungan}}</li>
                    <li class="list-group-item"><b>Awal Masa Kerja : </b> {{ $pegawai->awalmasuk}}</li>
                    <li class="list-group-item"><b>Tanggal Masuk : </b> {{ $pegawai->tanggalmasuk}}</li>
                    <li class="list-group-item"><b>Berakhir : </b> {{ $pegawai->berakhir}}</li>
                </ul>
            </div>
        <a class="btn btn-success" href="{{ route('pegawais.index')}}">Kembali</a>

        </div>

    </div>

</div>
</body>
@endsection