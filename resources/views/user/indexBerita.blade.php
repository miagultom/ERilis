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

                                  <?php $no = 1;?>
                                  @foreach ($dtBerita as $index => $item)
                                  <tr>
                                    <td scope="row">{{ $index + $dtBerita->firstItem() }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td><img src="{{ asset('Berita/') }}/{{ $item->gambar }}" alt="" style="width: 50px"></td>
                                    <td>{{ Str::limit ($item->deskripsi, 60) }}</td>
                                    <td>{{ $item->lokasi }}</td>
                                    <td>{{date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>
                                        <a href="/user/detail/{{ $item->id }}" class="btn btn-primary btn-sm">Detail</a>
                                        <a href="/user/edit/{{$item->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/user/delete/{{$item->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')">Hapus</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </thead>
                            </table>
                            <div>
                                Showing
                                {{  $dtBerita->firstItem() }} 
                                to
                                {{ $dtBerita->lastItem() }} 
                                of
                                {{ $dtBerita->total() }}
                                entires
                          </div>
                          <div class="pagination justify-content-end">
                              {{ $dtBerita->links() }}
                          </div>
                        </div>
                        <!-- /.card-body -->
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>
@include('sweetalert::alert')

@include('layouts.footer')

</body> 
</html>