
    
@extends('pegawais.layout')

@section('content')


<body>
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-center">
                <h2>KELOLA DATA PEGAWAI</h2>
            </div>
            <div class="text-left">
                <a class="btn btn-success" href="{{ route('pegawais.create') }}">Tambah Pegawai</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

   <div class="row">
     <div class="col-mb-3">
       <form action="?" class="col-auto ms-auto">
        <div class="input-group">
            <input type="text" name="search" value="{{ request()->search }}" 
           placeholder="Search" class="form-control">
           <button class="btn-btn-secondary" type="submit">
                Go
           </button>
        </div>
      </div>
    </form>
   </div>
   
    <div >
    <table class="table table-sm table-bordered">
        <tr class="d-flex">
            <th class="col-1">No</th>
            <th class="col-2">Foto</th>
            <th class="col-3">Nama</th>
            <th class="col-2">Jabatan</th>
            <th class="col-1">Jenis Kelamin</th>
            <th class="col-3" style="text-align: center">No ktp</th>
            <th class="col-3">NPWP</th>
            <th class="col-3">NO BPJS Kas</th>
            <th class="col-3">NO KK</th>
            <th class="col-3">Tempat Tanggal Lahir</th>
            <th class="col-3">Alamat KTP</th>
            <th class="col-3">Alamat Domisili</th>
            <th class="col-3">Gaji</th>
            <th class="col-3">Tanggal Gajian</th>
            <th class="col-3">NO REK</th>
            <th class="col-3">BANK</th>
            <th class="col-3">Email</th>
            <th class="col-3">No Hp</th>
            <th class="col-3">Tanggal Awal Masuk</th>
            <th class="col-3">Status</th>
            <th class="col-3">Tanggungan</th>
            <th class="col-3">Awal Masa Kerja</th>
            <th class="col-3">Tanggal Masuk</th>
            <th class="col-3">Berakhir Masa Kerja</th>
            <th class="col-2">Action</th>

        </tr>
        @foreach ($pegawais as $key => $pegawai)
        <tr class="d-flex"> 
            <td class="col-1">{{ $key+1 }}</td>
            <td class="col-2"><img width="120px" src="{{ url('/data_file/'.$pegawai->foto)}}"> </td>
            <td class="col-3">{{ $pegawai->nama }}</td>
            <td class="col-2">{{ $pegawai->jabatan}}</td>
            <td class="col-1">{{ $pegawai->jk }}</td>
            <td class="col-3" style="text-align: center">{{ $pegawai->noktp }}</td>
            <td class="col-3">{{ $pegawai->npwp}}</td>
            <td class="col-3">{{ $pegawai->nobpjs }}</td>
            <td class="col-3">{{ $pegawai->nokk }}</td>
            <td class="col-3">{{ $pegawai->ttl }}</td>
            <td class="col-3">{{ $pegawai->alamatktp}}</td>
            <td class="col-3">{{ $pegawai->domisili}}</td>
            <td class="col-3">{{ $pegawai->gaji }}</td>
            <td class="col-3">{{ $pegawai->tanggalgaji }}</td>
            <td class="col-3">{{ $pegawai->norek}}</td>
            <td class="col-3">{{ $pegawai->bank}}</td>
            <td class="col-3">{{ $pegawai->email}}</td>
            <td class="col-3">{{ $pegawai->nohp }}</td>
            <td class="col-3">{{ $pegawai->tanggalawal }}</td>
            <td class="col-3">{{ $pegawai->status}}</td>
            <td class="col-3">{{ $pegawai->tanggungan}}</td>
            <td class="col-3">{{ $pegawai->awalmasuk}}</td>
            <td class="col-3">{{ $pegawai->tanggalmasuk}}</td>
            <td class="col-3">{{ $pegawai->berakhir }}</td>
            <td class="col-2">
                <form action="{{ route('pegawais.destroy',$pegawai->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('pegawais.show',$pegawai->id)}}">Show</a>
 
                    <a class="btn btn-primary" href="{{ route('pegawais.edit',$pegawai->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    
  
</body>
@endsection






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