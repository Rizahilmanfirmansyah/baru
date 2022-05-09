@extends('pegawais.layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header">
            Edit Pegawai
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
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{$pegawai->nama}}" aria-describedby="nama" placeholder="Masukkan Nama">
                </div>
                
    
                <div class="form-group">
                    <label for="foto">Lampirkan Foto</label>
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
                    <label for="jabatan">Pilih Jabatan</label>
                    <select class="form-control select2" style="width: 100%" name="jabatan" id="jabatan">
                        <option value="Manager">Manager</option>
                        <option value="Manager">Manager</option>
                        <option value="Manager">Manager</option>
                        <option value="Manager">Manager</option>
                        <option value="Manager">Manager</option>
                    </select>
                    <!--
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" aria-describedby="jabatan" placeholder="Masukkan Jabatan">
                    -->
                </div>
                <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" id="jk" aria-describedby="jk" placeholder="Masukkan Jabatan">
                </div>
            
               <!-- <div>
                    <label for="jk">Jenis Kelamin</label>
                    <p><input type="radio" name="jk"  value="L" checked <? $pegawai['jk'] == "L" ?>>Pria   <input type="radio" name="jk"  value="P" <? $pegawai['jk'] == "P"?>>Wanita</p>
                </div>
            -->
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
                    <label for="nokk">NO KK</label>
                    <input type="text" name="nokk" class="form-control" id="nokk" aria-describedby="nokk" placeholder="Masukan No KK">
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input type="text" name="ttl" class="form-control" id="ttl" aria-describedby="ttl" placeholder="Masukan Tempat Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="alamatktp">Alamat KTP</label>
                    <input type="text" name="alamatktp" class="form-control" id="alamatktp" aria-describedby="alamatktp" placeholder="Masukan Alamat KTP">
                </div>
                <div class="form-group">
                    <label for="domisili">Domisili</label>
                    <input type="text" name="domisili" class="form-control" id="domisili" aria-describedby="domisili" placeholder="Masukan Domisili">
                </div>
                <div class="form-group">
                    <label for="gaji">Gaji</label>
                    <input type="text" name="gaji" class="form-control" id="gaji" aria-describedby="gaji" placeholder="Masukan Gaji">
                </div>
                <div class="form-group">
                    <label for="tanggalgaji">Tanggal Gajihan</label>
                    <input type="date" name="tanggalgaji" class="form-control" id="tanggalgaji" aria-describedby="tanggalgaji" placeholder="Masukan Tanggal Gajihan">
                </div>
                <div class="form-group">
                    <label for="norek">NO REK</label>
                    <input type="text" name="norek" class="form-control" id="norek" aria-describedby="norek" placeholder="Masukan NO REKENING">
                </div>
                <div class="form-group">
                    <label for="bank">BANK</label>
                    <input type="text" name="bank" class="form-control" id="bank" aria-describedby="bank" placeholder="Masukan Nama Bank">
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Masukan Alamat email">
                </div>
                <div class="form-group">
                    <label for="nohp">NO HP</label>
                    <input type="text" name="nohp" class="form-control" id="nohp" aria-describedby="nohp" placeholder="Masukan Nomer hp">
                </div>
                <div class="form-group">
                    <label for="tanggalawal">Tanggal Awal</label>
                    <input type="text" name="tanggalawal" class="form-control" id="tanggalawal" aria-describedby="tanggalawal" placeholder="Masukan Tanggal">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" class="form-control" id="status" aria-describedby="status" placeholder="Masukan Status">
                </div>
                <div class="form-group">
                    <label for="tanggungan">Tanggungan</label>
                    <input type="text" name="tanggungan" class="form-control" id="tanggungan" aria-describedby="tanggungan" placeholder="Masukan Tangungan">
                </div>
                <div class="form-group">
                    <label for="awalmasuk">Awal Masuk</label>
                    <input type="text" name="awalmasuk" class="form-control" id="awalmasuk" aria-describedby="awalmasuk" placeholder="Masukan tanggal Awal Masuk">
                </div>
                <div class="form-group">
                    <label for="tanggalmasuk">Tanggal Masuk</label>
                    <input type="text" name="tanggalmasuk" class="form-control" id="tanggalmasuk" aria-describedby="tanggalmasuk" placeholder="Masukan Tanggal Masuk">
                </div>
                <div class="form-group">
                    <label for="berakhir">Berakhir</label>
                    <input type="text" name="berakhir" class="form-control" id="berakhir" aria-describedby="berakhir" placeholder="Masukan Tanggal Masuk">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-success" href="{{ route('pegawais.index')}}">Kembali</a>
                </form>
                    </div>
                </div>
            </div>
            </div>
@endsection