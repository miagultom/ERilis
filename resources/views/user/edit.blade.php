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
                          <div><h5 class="card-title">Form Edit Berita</h5></div><br>

                            <form action="/user/update/{id}"  method="post" id="contact-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                              <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-6">
                                  <select class="form-select" aria-label="Default Select Example" value="{{ $berita->kategori }}">
                                    <option selected>Pilih Kategori</option>
                                    <option value="Budaya">Budaya</option>
                                    <option value="Citizen">Citizen</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Health">Health</option>
                                    <option value="Internasional">Internasional</option>
                                    <option value="Lifestyle">Lifestyle</option>
                                    <option value="Otomotif">Otomotif</option>
                                    <option value="Pariwisata">Pariwisata</option>
                                    <option value="Pemerintahan">Pemerintahan</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Peristiwa">Peristiwa</option>
                                    <option value="Teknologi">Teknologi</option>
                                  </select>
                                </div>
                              </div>  
                              <div class="row mb-3">
                                  <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                  <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile" name="gambar" value="{{ $berita->gambar }}">
                                  </div>
                                </div> 
                              <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-6">
                                  <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" value="{{ $berita->deskripsi }}"></textarea>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="lokasi" value="{{ $berita->lokasi }}">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-6">
                                  <input type="date" class="form-control" name="tanggal" value="{{ $berita->tanggal }}">
                                </div>
                              </div>  
                              <div class="row mb-3">
                                <label for="author" class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="author" value="{{ $berita->author }}">
                                </div>
                              </div>  
                                                                    
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                    <a href="/user/berita">
                                  <button type="submit" class="btn btn-primary">Edit</button>
                                    </a>
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