
    
@extends('pegawais.layout')

@section('content')

<style>
    .freeze-table{
        border-spacing: 0ch;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        padding: 0;
        border: 1px solid #ccc;
    }
    thead th{
        top: 0;
        background-color: white;
        color: #fff;
        z-index: 20;
        min-height: 30px;
        height: 30px;
        text-align: left;
    }
    tr:nth-child(even){
        background-color: #f2f2f2;
           
    }

    th, td{
        padding: 0;
        outline: 1px solid #ccc;
        border: none;
        outline-offset: -1px;
        padding-left: 30px;
        width: 140px;
        
    }
    tr{
        min-height: 25px;
        height: 25px;
    }
    .col-id-no{
        left: 0;
        position: sticky;
    }
    .col-first-name{
        left: 80px;
        position: sticky;
    }
    .fixed-header{
        z-index: 50;
    }
    tr:nth-child(even) td[scope=row]{
        background-color: #f2f2f2;
    }
    tr:nth-child(odd) td[scope=row]{
        background-color: white;
    }
    .table-container{
        width: 500px;
        height: 300px;
        overflow: scroll;
    }
</style>





<style>
     .freeze-table{
        border-spacing: 0ch;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        padding: 0;
        border: 1px solid #ccc;
     }
     tr th {
        top: 0;
        
        position: sticky;
        color: #fff;
        z-index: 20;
        min-height: 30px;
        height: 30px;
        text-align: left;
    
        white-space: pre-wrap !important;
        text-align: center;
        background-color: white;
        color: black;
    
    }

    tr td {
       white-space: nowrap;
       text-align: center;
    }

    .kolum{
       position: sticky;
       left: 0px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;

    }
    .second-column {
       position: sticky;
       left: 350px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;
    }
   .first-column {
       position: sticky;
       left: 180px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;
    }
  .third-column {
       position: sticky;
       left: 43px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;
    }
   .fourth-column {
       position: sticky;
       left: 6px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;
    }

   .first-column.header {
       background-color: aliceblue;
    }
     </style>


 
     <body  >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
        <div class="container">
        <div class="row">
                
       <div class="col-md-12">
    <body >
        <!--
        <div class="">
            <img src="{{ asset('poto/download.png')}}">
        </div>
    -->
        <div class="row">
            <div class="col-lg-12 margin-tb mt-3 mb-3">
                <div class="text-center">
                    <h2>KELOLA DATA PEGAWAI</h2>
                </div>
            <div class="col-mb-3">
                <div class="text-left">
                    <a class="btn btn-success" href="{{ route('pegawais.create') }}">Tambah Pegawai</a>
                </div> 
            </div> 
            </div>
        </div>
        
       <div class="row">
         <div class="col-mb-3">
           <form action="/search" class="col-auto ms-auto">
            <div class="input-group">
               <input type="text" name="search" value="{{ request()->search }}" placeholder="Search" class="form-control">
              <br><br>
               <button class="btn btn-primary" type="submit">Search</button>
               &nbsp;
               <a class="btn btn-primary" href="{{ route('pegawais.index')}}">Refresh</a>
            </div>
          </div>
        </form>
       </div> 

       <div>
       @if ($message = Session::get('success'))
       <div class="alert alert-success " role="alert">
           <strong><p>{{ $message }}</p></strong>
           <!--<button type="button" class="" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>-->
         </div>
       @endif
       </div>
       
       <!--<div style="overflow: scroll;">
       -->
       <table class="table table-bordered table-striped table-success">
        <thead>                   
            <tr class="">
                <th class="" >NO</th>
                <th class="" >FOTO</th>
                <th class="" >NAMA</th>
                <th class="" >JABATAN</th>
                <th class="" >JENIS KELAMIN</th>
                <th class="" >NO KTP</th>
                <th class="" >NPWP</th>
                <th class="" >NO BPJS KAS</th>
                <th class="" >NO KARTU KELUARGA</th>
                <th class="" >TEMPAT LAHIR</th>
                <th class="" >TANGGAL LAHIR</th>
                <th class="" >ALAMAT KTP</th>
                <th class="" >DOMISILI</th>
                <th class="" >GAJI</th>
                <th class="" >TANGGAL GAJI</th>
                <th class="" >NO REK</th>
                <th class="" >BANK</th>
                <th class="" >EMAIL</th>
                <th class="" >NO HP</th>
                <th class="" >STATUS</th>
                <th class="" >TANGGUNGAN</th>
                <th class="" >AWAL MASA KERJA</th>
                <th class="" >TANGGAL MASUK</th>
                <th class="" >BERAKHIR</th>
                <th>Penghargaan</th>
               
                <th class="" >ACTION</th>
            </tr>
        </thead>
        @php
            $nomor = 1 + (($pegawais->currentPage()-1) * $pegawais->perPage());
        @endphp
            @foreach ($pegawais as $pegawai)
            <tr class=""> 
                <td class="fourth-column">{{ $nomor++ }}</td>
                <td class="third-column"><img width="120px" src="{{ url('/data_file/'.$pegawai->foto)}}"> </td>
                <td class="first-column ">{{ $pegawai->nama }}</td>
                <td class="second-column">{{ $pegawai->jabatan_id}}</td>
                <td class="">{{ $pegawai->jk }}</td>
                <td class="">{{ $pegawai->noktp }}</td>
                <td class="col-3">{{ $pegawai->npwp}}</td>
                <td class="col-3">{{ $pegawai->nobpjs }}</td>
                <td class="col-3">{{ $pegawai->nokk }}</td>
                <td class="col-3">{{ $pegawai->tempatlahir}}</td>
                <td class="col-3">{{ $pegawai->ttl }}</td>
                <td class="col-3">{{ $pegawai->alamatktp}}</td>
                <td class="col-3">{{ $pegawai->domisili}}</td>
                <td class="col-3">{{ $pegawai->gaji }} </td>
                <td class="col-3">{{ $pegawai->tanggalgaji }}</td>
                <td class="col-3">{{ $pegawai->norek}}</td>
                <td class="col-3">{{ $pegawai->bankfungsi->banksip}}</td>
                <td class="col-3">{{ $pegawai->email}}</td>
                <td class="col-3">{{ $pegawai->nohp }}</td>
                <td class="col-3">{{ $pegawai->status}}</td>
                <td class="col-3">{{ $pegawai->tanggungan}}</td>
                <td class="col-3">{{ $pegawai->awalmasuk}}</td>
                <td class="col-3">{{ $pegawai->tanggalmasuk}}</td>
                <td class="col-3">{{ $pegawai->berakhir }}</td>
                <td>
                <ul>
                    @foreach($pegawai->penghargaanfungsi as $p)
                    <li>{{$p->penghargaansip}}</li>
                    @endforeach
                </ul>
                </td>
                
               
                <td class="col-2">
                    <form action="{{ route('pegawais.destroy',$pegawai->id) }}" method="POST">
    
                        <a class="btn btn-info glyphicon glyphicon-user" href="{{ route('pegawais.show',$pegawai->id)}}"></a>

                        
     
                        <a class="btn btn-primary glyphicon glyphicon-pencil" href="{{ route('pegawais.edit',$pegawai->id) }}"></a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger glyphicon glyphicon-trash"></button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </table>
        {{ $pegawais->links()}}
        </div>
    </body>
    @endsection
</div>
</div>
</div>
</div>

           






 <!-- <div class="container-fluid">
    <table id="productSizes" class="table table-striped table-bordered">
        <thead>
            <tr class="d-flex">
                <th class="col-1">Size</th>
                <th class="col-3">Bust</th>
                <th class="col-3">Waist</th>
                <th class="col-5">Hips</th>
                <th class="col-3">Waist</th>
                <th class="col-3">Waist</th>
                <th class="col-3">Waist</th>

            </tr>
        </thead>
        <tbody>
            <tr class="d-flex">
                <td class="col-1">6</td>
                <td class="col-3">79 - 81</td>
                <td class="col-3">61 - 63</td>
                <td class="col-5">89 - 91</td>
            </tr>
            <tr class="d-flex">
                <td class="col-1">8</td>
                <td class="col-3">84 - 86</td>
                <td class="col-3">66 - 68</td>
                <td class="col-5">94 - 96</td>
                <td class="col-3">61 - 63</td>
                <td class="col-3">61 - 63</td>
                <td class="col-3">61 - 63</td>
            </tr>
        </tbody>
    </table>
    -->
    <br>
    <br>
   <!-- <form >
        <div class ="row" >
        
            <div class="col-md-3">
                <div class="form-group">
                    <label for="namadepan" class="control-label">Nama Depan</label>
                    <input type="text" class="form-control" id="namadepan" placeholder="Nama Depan">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="namadepan" class="control-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="namadepan" placeholder="Nama Depan">
                </div>
            </div>
        
        </div>
    
        <div class="row">
            <div class="col-md-3">
                <div class = "form-group">
                    <label for = "name">Jenis Kelamin</label>
                    <select class = "form-control">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class = "form-group">
                    <label for = "name">Status</label>
                    <div class="radio">
                        <label><input type="radio" name="optradio">Menikah</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio">Belum Menikah</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="alamatanda" class="control-label">Alamat</label>
                    <input type="email" class="form-control" id="alamatanda" placeholder="Alamat lengkap">
                </div>
                <div class="form-group">
                    <label for="komentaranda" class="control-label">Komentar</label>
                    <textarea class="form-control" id="komentaranda" placeholder="Komentar anda" rows="3"></textarea>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">Berlangganan</label>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
        </form>
    </div>
    </body>
    </html> 
-->