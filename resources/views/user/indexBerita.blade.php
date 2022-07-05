<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ERilis Kab.Toba | Berita</title>
</head>
<body>

@include('layouts.template')
@include('layouts.header')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Berita</h1>
                </div>
                <div class="col-sm-6">
                    <a href="/user/create" class="btn btn-primary" style="float: right;" id="openAddModal">Tambah Berita</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        <ul>
                            foreach ($errors->all() as $message) {
                            <li>{{ $message }}</li>
                            }
                        </ul>
                    </div>
                    @endif

                    @if (session('status') == 'Success')
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Berita</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Judul</th>
                                      <th scope="col">Kategori</th>
                                      <th scope="col">Gambar</th>
                                      <th scope="col">Deskripsi</th>
                                      <th scope="col">Lokasi</th>
                                      <th scope="col">Tanggal</th>
                                      <th scope="col">Author</th>
                                      <th scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                          
                                  <tbody>
                                      <?php $no = 1;?>
                                      @foreach ($model_Berita as $berita)
                                     <tr>
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $berita->judul}}</td>
                                      <td>{{ $berita->kategori}}</td>
                                      <td><img src="{{ asset('DataWisata/') }}/{{ $berita->gambar }}" alt="" style="width: 100px"></td>
                                      <td>{{ Str::limit ($berita->deskripsi, 50) }}</td>
                                      <td>{{ $berita->lokasi }}</td>
                                      <td>{{ $berita->tanggal}}</td>
                                      <td>{{ $berita->author}}</td>
                                      <td>
                                          <a href="/Berita/Detail/{{$berita->id}}" class="btn btn-primary btn-sm">Detail</a>
                                          <a href="/Berita/Edit/{{$berita->id}}" class="btn btn-warning btn-sm">Edit</a>
                                          <a href="/Berita/Delete/{{$berita->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')">Hapus</a>
                                      </td>
                                     </tr>
                                      @endforeach
                                  </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')
</body> 
</html>