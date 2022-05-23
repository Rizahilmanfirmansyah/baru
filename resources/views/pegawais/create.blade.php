@extends('pegawais.layout')
  
@section('content')
   
<body  >
<div class="container mt-5">
    
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header">
            TAMBAH PEGAWAI
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Waduh!</strong>Kesalahan input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('pegawais.store') }}" enctype="multipart/form-data" id="myForm">
            @csrf
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukkan Nama">
            </div>
            

            <div class="form-group">
                <label for="foto">FOTO</label>
                <p><input type="file" name="foto" id="foto"></p>
            </div>
            
            
            <div class="form-group">
               
                <!--
                <label for="jabatan_id">Pilih Jabatan</label>
                <select class="form-control select2" style="width: 100%" name="jabatan_id" id="jabatan_id">
                    @foreach ( $jab as $item )
                    <option value="{{ $item->id}}">{{ $item->jabatansip}}</option>
                    @endforeach
                </select>
            -->
                
                <label for="jabatan">JABATAN</label>
                <select class="form-control select2"  style="width: 100%" name="jabatan_id" id="jabatan_id">
                    <option selected disabled>Pilih Jabatan</option>
                    <option value="Direkektur Utama">Direktur Utama</option>
                        <option value="Direktur">Direktur </option>
                        <option value="Direktru Keuangan">Direktur Keuangan</option>
                        <option value="Direktur Personalia">Direktur Personalia</option>
                        <option value="Manager">Manager</option>
                        <option value="Staf">Staf</option>
                        <option value="Manager Personalia">Manager Personalia</option>
                        <option value="Manager Pemasaran">Manager Pemasaran</option>
                        <option value="Manager Pabrik">Manager Pabrik</option>
                        <option value="Administrasi">Administrasi</option>
                        <option value="Jajaran Direksi">Jajaran Direksi</option>
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
                <p><input type="radio" name="jk"  value="L" checked <? $pegawai['jk'] == "L" ?> >Pria  &nbsp; <input type="radio" name="jk"  value="P" <? $pegawai['jk'] == "P"?> >Wanita</p>
            </div>
        </p>
        
             <div class="form-group">
                <label for="noktp">NO KTP</label>
                <input type="text" name="noktp" class="form-control" id="noktp" aria-describedby="noktp" placeholder="Masukan NO KTP">
            </div>
            <div class="form-group">
                <label for="npwp">NPWP</label>
                <input type="text" name="npwp" class="form-control" id="npwp" aria-describedby="npwp" placeholder="Masukan NPWP">
            </div>
            <div class="form-group">
                <label for="nobpjs">NO BPJS</label>
                <input type="text" name="nobpjs" class="form-control" id="nobpjs" aria-describedby="nobpjs" placeholder="Masukan NO BPJS">
            </div>
            <div class="form-group">
                <label for="nokk">NO KARTU KELUARGA</label>
                <input type="text" name="nokk" class="form-control" id="nokk" aria-describedby="nokk" placeholder="Masukan No KK">
            </div>
            <div class="form-group">
                <label for="tempatlahir">Tempat Lahir</label>
                <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" aria-describedby="tempatlahir" placeholder="Masukan Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="ttl">TANGGAL LAHIR</label>
                <input type="date" name="ttl" class="form-control" id="ttl" aria-describedby="ttl" placeholder="Masukan Tempat Tanggal Lahir">
            </div>
            <div class="form-group">
                <label for="alamatktp">ALAMAT KTP</label>
                <input type="text" name="alamatktp" class="form-control" id="alamatktp" aria-describedby="alamatktp" placeholder="Masukan Alamat KTP">
            </div>
            <div class="form-group">
                <label for="domisili">DOMISILI</label>
                <input type="text" name="domisili" class="form-control" id="domisili" aria-describedby="domisili" placeholder="Masukan Domisili">
            </div>
            <div class="form-group">
                <label for="gaji">GAJI</label>
                <input type="text" wire:model="gaji" name="gaji"  type-currency="IDR" placeholder="Rp" class="form-control" id="gaji" aria-describedby="gaji" >
            </div>
            <div class="form-group">
                <label for="tanggalgaji">TANGGAL GAJI</label>
                <input type="date" name="tanggalgaji" class="form-control" id="tanggalgaji" aria-describedby="tanggalgaji" placeholder="Masukan Tanggal Gajihan">
            </div>

            <div class="form-group">
                <label for="bank">KATEGORI BANK</label>
                <select class="form-control select2" style="width:100%" name="bank" id="bank">

                    <option selected disabled>Pilih Kategori</option>

                    @foreach( $bank as $item)
                    <option value="{{$item->id}}">{{$item->banksip}}</option>

                    @endforeach

                </select>
            </div>
            
           <!-- <label for="bank">KATEGORI BANK</label>
                <select class="form-control select2"  style="width: 100%" name="bank" id="bank">
                    <option selected disabled>Pilih Bank</option>
                    <option value="BRI">BRI</option>
                    <option value="BNI">BNI</option>
                    <option value="BTN">BTN</option>
                    <option value="Bank Mandiri">BANK MANDIRI</option>
                    <option value="Mandiri Syariah">BANK MANDNIRI SYARIAH</option>
                    <option value="BCA">BCA</option>
                    <option value="CIMB NIAGA">CIMB NIAGA</option>
                    
                    @foreach( $bank as $item)

                    <option value="{{ $item->id}}">{{$item->banksip}}</option>

                    @endforeach

                    
                   
                </select>-->
                <P>
                <div class="form-group">
                    <label for="norek">NO REK</label>
                    <input type="text" name="norek" class="form-control" id="norek" aria-describedby="norek" placeholder="Masukan NO REKENING">
                </div>
                </P>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="text" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Masukan Alamat email">
            </div>
            <div class="form-group">
                <label for="nohp">NO HP</label>
                <input type="text" name="nohp" class="form-control" id="nohp" aria-describedby="nohp" placeholder="Masukan Nomer hp">
            </div>

            <div class="form-group">
                <label for="status">STATUS</label>
                <select class="form-control select2" style="width: 100%" name="status" id="status">
                    <option selected disabled>Pilih Status</option>
                    <option value="Tetap">Pekerja Tetap</option>
                    <option value="Tidak Tetap">Pekerja Tidak tetap</option>
                    <option value="Paruh Waktu">Part-Time</option>
                </select>
            </div>
           
            <div class="form-group">
                <label for="tanggungan">TANGGUNGAN</label>
                <input type="text" name="tanggungan" class="form-control" id="tanggungan" aria-describedby="tanggungan" placeholder="Masukan Tangungan">
            </div>
            <div class="form-group">
                <label for="awalmasuk">AWAL MASA KERJA</label>
                <input type="date" name="awalmasuk" class="form-control" id="awalmasuk" aria-describedby="awalmasuk" placeholder="Masukan tanggal Awal Masuk">
            </div>
            <div class="form-group">
                <label for="tanggalmasuk">TANGGAL MASUK</label>
                <input type="date" name="tanggalmasuk" class="form-control" id="tanggalmasuk" aria-describedby="tanggalmasuk" placeholder="Masukan Tanggal Masuk">
            </div>
            <div class="form-group">
                <label for="berakhir">BERAKHIR</label>
                <input type="text" name="berakhir" class="form-control" id="berakhir" aria-describedby="berakhir" placeholder="Masukan Tanggal Masuk">
            </div>

            <div class="form-group">
                <label for="penghargaan">PENGHARGAAN</label>
                <select class="form-control" id="paket" name="paket[]" multiple="multiple" >
                   
                    @foreach($peng as $item)
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
Css js dropdown select multiple pada penghargaan
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