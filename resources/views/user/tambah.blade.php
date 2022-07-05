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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div><h5 class="card-title">Form Tambah Berita</h5></div><br>

                            <form action="{{route('createdata.addBerita')}}"  method="post" id="contact-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                              <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="judul">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="kategori">
                                </div>
                              </div>  
                              <div class="row mb-3">
                                  <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                  <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile" name="gambar">
                                  </div>
                                </div> 
                              <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-6">
                                  <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="lokasi">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-6">
                                  <input type="date" class="form-control" name="tanggal">
                                </div>
                              </div>  
                              <div class="row mb-3">
                                <label for="author" class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="author">
                                </div>
                              </div>  
                                                                    
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                  <button type="submit" class="btn btn-primary" href="/user/Berita">Submit Form</button>
                                </div>
                              </div>
              
                            </form><!-- End General Form Elements -->
    
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
        </div>
    </section>
</div>
@include('layouts.footer')
</body>
</html>