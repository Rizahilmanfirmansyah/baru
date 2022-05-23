@extends('pegawais.layout')
  
@section('content')

<body>
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card " style="width: 50rem;">
            <i class="bi bi-person-fill"></i>
            <div class="card-header">
            EDIT PEGAWAI
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Waduh!</strong> Kesalahan input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('pegawais.update',$pegawai->id) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{$pegawai->nama}}" aria-describedby="nama" placeholder="Masukkan Nama">
                </div>
                
               
             <!-- <p><img width="120px" src="{{ url('/data_file/',$pegawai->foto)}}"></p>
               
               <p> <input type="text" class="form-control" value="{{$pegawai->foto}}"></p>
                <div class="form-group">
                    <label for="foto">Lampirkan Foto</label>
                    <p><input type="file"  name="foto" id="foto"></p>
                </div>-->
                
                
                <!--
                <input type="text"  class="form-control" value="{{ $pegawai->foto }}" name="foto">

                <p>
                <div class="form-control">
                <input type="file" name="foto">
                </div>
                </p>
            -->
                
                <div class="form-group">
                   <label for="jabatan">JABATAN</label>
                    <select class="form-control select2" style="width: 100%" name="jabatan_id" id="jabatan_id">
                        <option value="{{$pegawai->jabatan_id}}">{{$pegawai->jabatan_id}}</option>
                        <option value="Direkektur Utama">Direktur Utama</option>
                        <option value="Direktur">Direktur </option>
                        <option value="Direktru Keuangan">Direktur Keuangan</option>
                        <option value="Direktur Personalia">Direktur Personalia</option>
                        <option value="Manager">Manager</option>
                        <option value="Manager Personalia">Manager Personalia</option>
                        <option value="Manager Pemasaran">Manager Pemasaran</option>
                        <option value="Manager Pabrik">Manager Pabrik</option>
                        <option value="Administrasi">Administrasi</option>
                        <option value="Jajaran Direksi">Jajaran Direksii</option>
                    </select>
                
                    <!--
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" aria-describedby="jabatan" placeholder="Masukkan Jabatan">
                    -->
                    <!--
                </div>
                <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" id="jk" aria-describedby="jk" placeholder="Masukkan Jabatan">
                </div>
            -->
            <p>
                <div>
                    <label for="jk">JENIS KELAMIN</label>
                    <p><input type="radio" name="jk"  value="L" checked <? $pegawai['jk'] == "L" ?>>Pria &nbsp; <input type="radio" name="jk"  value="P" <? $pegawai['jk'] == "P"?>>Wanita</p>
                </div>
            </p>
                 <div class="form-group">
                    <label for="noktp">NO KTP</label>
                    <input type="text" name="noktp" value="{{$pegawai->noktp}}" class="form-control" id="noktp" aria-describedby="noktp" placeholder="Masukan NO KTP">
                </div>
                <div class="form-group">
                    <label for="npwp">NPWP</label>
                    <input type="text" name="npwp" value="{{$pegawai->npwp}}" class="form-control" id="npwp" aria-describedby="npwp" placeholder="Masukan NPWP">
                </div>
                <div class="form-group">
                    <label for="nobpjs">NO BPJS</label>
                    <input type="text" name="nobpjs" value="{{$pegawai->nobpjs}}" class="form-control" id="nobpjs" aria-describedby="nobpjs" placeholder="Masukan NO BPJS">
                </div>
                <div class="form-group">
                    <label for="nokk">NO KARTU KELUARGA</label>
                    <input type="text" name="nokk" value="{{$pegawai->nokk}}" class="form-control" id="nokk" aria-describedby="nokk" placeholder="Masukan No KK">
                </div>
                <div class="form-group">
                    <label for="tempatlahir">TEMPAT LAHIR</label>
                    <input type="text" name="tempatlahir" value="{{$pegawai->tempatlahir}}" class="form-control" id="tempatlahir" aria-describedby="tempatlahir" placeholder="masukan Tempat lahir">
                </div>
                <div class="form-group">
                    <label for="ttl">TANGGAL LAHIR</label>
                    <input type="date" name="ttl" value="{{$pegawai->ttl}}" class="form-control" id="ttl" aria-describedby="ttl" placeholder="Masukan Tempat Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="alamatktp">ALAMAT KTP</label>
                    <input type="text" name="alamatktp" value="{{$pegawai->alamatktp}}" class="form-control" id="alamatktp" aria-describedby="alamatktp" placeholder="Masukan Alamat KTP">
                </div>
                <div class="form-group">
                    <label for="domisili">DOMISILI</label>
                    <input type="text" name="domisili" value="{{$pegawai->domisili}}" class="form-control" id="domisili" aria-describedby="domisili" placeholder="Masukan Domisili">
                </div>
                <div class="form-group">
                    <label for="gaji">GAJI</label>
                    <input type="text" wire:model="gaji" type-currency="IDR"  name="gaji" value="{{$pegawai->gaji}}" class="form-control" id="gaji" aria-describedby="gaji" placeholder="Rp">
                </div>
                <div class="form-group">
                    <label for="tanggalgaji">TANGGAL GAJIAN</label>
                    <input type="date" name="tanggalgaji" value="{{$pegawai->tanggalgaji}}" class="form-control" id="tanggalgaji" aria-describedby="tanggalgaji" placeholder="Masukan Tanggal Gajihan">
                </div>
                <div class="form-group">
                    <label for="norek">NO REK</label>
                    <input type="text" name="norek" value="{{$pegawai->norek}}" class="form-control" id="norek" aria-describedby="norek" placeholder="Masukan NO REKENING">
                </div>

                <div class="form-group">
                    <label for="bank">KATEGORI BANK</label>
                    <select class="form-control select2" style="width:100%" name="bank" id="bank">

                        <option value="{{$pegawai->bankfungsi->id}}">{{$pegawai->bankfungsi->banksip}}</option>

                        @foreach( $bank as $item)
                        <option value="{{$item->id}}">{{$item->banksip}}</option>

                        @endforeach

                    </select>
                </div>
              <!-- <div class="form-group">
                    <label for="bank">  KATEGORI BANK </label>
                    <select class="form-control select2" style="width: 100%" name="bank" id="bank">
                        <option value="{{$pegawai->bank}}">{{$pegawai->bank}}</option>
                        <option value="BRI">BRI</option>
                        <option value="BNI">BNI</option>
                        <option value="BTN">BTN</option>
                        <option value="BCA">BCA</option>
                        <option value="BANK SYARIAH INDONESIA">BSI</option>
                        <option value="BANK MANDIRI">BANK MANDIRI</option>
                        <option value="CIMB NIAGA">CIMB NIAGA</option> 
                    </select>
                </div>-->
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" name="email" value="{{$pegawai->email}}" class="form-control" id="email" aria-describedby="email" placeholder="Masukan Alamat email">
                </div>
                <div class="form-group">
                    <label for="nohp">NO HP</label>
                    <input type="text" name="nohp" value="{{$pegawai->nohp}}" class="form-control" id="nohp" aria-describedby="nohp" placeholder="Masukan Nomer hp">
                </div>
                <div class="form-group">
                    <label for="status">STATUS</label>
                    <select class="form-control select2"  style="width: 100%" name="status">
                        <option value="{{$pegawai->status}}">{{$pegawai->status}}</option>
                        <option  value="Pekerja Tetap">Pekerja Tetap</option>
                        <option  value="Pekerja Tidak Tetap">Pekerja tidak tetap</option>
                        <option  value="Paruh Waktu">Part Time</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggungan">TANGGUNGAN</label>
                    <input type="text" name="tanggungan" value="{{$pegawai->tanggungan}}" class="form-control" id="tanggungan" aria-describedby="tanggungan" placeholder="Masukan Tangungan">
                </div>
                <div class="form-group">
                    <label for="awalmasuk">AWAL MASA KERJA</label>
                    <input type="date" name="awalmasuk" value="{{$pegawai->awalmasuk}}" class="form-control" id="awalmasuk" aria-describedby="awalmasuk" placeholder="Masukan tanggal Awal Masuk">
                </div>
                <div class="form-group">
                    <label for="tanggalmasuk">TANGGAL MASUK</label>
                    <input type="date" name="tanggalmasuk" value="{{$pegawai->tanggalmasuk}}" class="form-control" id="tanggalmasuk" aria-describedby="tanggalmasuk" placeholder="Masukan Tanggal Masuk">
                </div>
                <div class="form-group">
                    <label for="berakhir">BERAKHIR</label>
                    <input type="text" name="berakhir" value="{{$pegawai->berakhir}}" class="form-control" id="berakhir" aria-describedby="berakhir" placeholder="Masukan Tanggal Masuk">
                </div>
                <div class="form-group">
                    <label for="penghargaan">Penghargaan</label>
                    <select id="paket" name="paket[]" class="form-control" multiple>
                        

                        @foreach($penghar as $item)
                        <option value="{{$item->id}}">{{$item->penghargaansip}}</option>
                        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-success" href="{{ route('pegawais.index')}}">Kembali</a>
                </form>
                    </div>
                </div>
            </div>
            </div>
</body>
<!--
Css Js form penghargaan
-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>

        $(document).ready(function () {

            $("#paket").select2({

                placeholder : " Pilih"

            });

        });

    </script>
@endsection