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
                            <form action="{{ url('user/create/addBerita') }}"  method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                              <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" placeholder="Judul Berita" value="{{ old('judul') }}">
                                  @error('judul')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                  <div class="col-sm-10">
                                    <select class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori">
                                  <option selected disabled>---Pilih Kategori---</option>
                                  <option value="Budaya" selected>Budaya</option>
                                  <option value="Citizen" selected>Citizen</option>
                                  <option value="Ekonomi" selected>Ekonomi</option>
                                  <option value="Health" selected>Health</option>
                                  <option value="Internasional" selected>Internasional</option>
                                  <option value="Lifestyle" selected>Lifestyle</option>
                                  <option value="Otomotif" selected>Otomotif</option>
                                  <option value="Pariwisata" selected>Pariwisata</option>
                                  <option value="Pemerintahan" selected>Pemerintahan</option>
                                  <option value="Pendidikan" selected>Pendidikan</option>
                                  <option value="Peristiwa" selected>Peristiwa</option>
                                  <option value="Teknologi" selected>Teknologi</option>
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>
                              </div>

                              <div class="row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                <input class="form-control @error('gambar') is-invalid @enderror" type="file" name="gambar" id="gambar">
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div> 
                              </div>

                              <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30" rows="5" placeholder="Deskripsi" value="{{ old('deskripsi') }}"></textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>
                              </div>

                              <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" id="lokasi" placeholder="Lokasi Berita" value="{{ old('lokasi') }}">
                                @error('lokasi')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>
                              </div>

                              <div class="row mb-3">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>
                              </div>

                              <div class="row mb-3">
                                <label for="author" class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author" placeholder="Author" value="{{ old('author') }}">
                                @error('author')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                              </div> 
                              </div>

                              <?php
                                if(isset($_POST['submit'])){
                                  if(!empty($_POST['kategori'])) {
                                    $selected = $_POST['kategori'];
                                    echo 'You have chosen: ' . $selected;
                                  } else {
                                    echo 'Please select.';
                                  }
                                }
                              ?>
                                                                    
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                  <button class="btn btn-primary">Submit Form</button>
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