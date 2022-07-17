<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ERilis Kab.Toba | Berita</title>
</head>
<body>
<div class="content-wrapper">
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
						<section id="objek"  class="section-bg" >
							<div class="container">
							  <header class="section-header">
								<center><label><h1 class="section-header">{{ $detail->judul }}</h1></label></center>
							  </header>
							</div>

                            <div class="card-body">
                                <div class="container-lokasi">
                                    <p class="card-text">{{date('l, d F Y', strtotime($detail->tanggal)) }}</p>
                                </div>
                                <div class="container-kategori"> 
                                    <p class="card-text">Kategori Berita : {{ $detail->kategori }}</p>
                                </div>
                            </div>
                            

                            <div class="container-detailgambar">
								<center><img src="{{ asset('Berita/') }}/{{ $detail->gambar }} " class="card-img-top " alt="..." style="width: 400px"></center>
							</div>

							<div class="text-justify">
								<p class="card-body" >{{ $detail->lokasi}}, {{ $detail->deskripsi }}</p>
							</div>

							<div class="container-author">
								<p class="card-body">Penulis : {{ $detail->author}}</p>
							</div>
						</section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')
</body>
</html>