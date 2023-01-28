@extends('layouts.user')

@section('content')
    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 wrap-about">
						<div class="img img-2 mb-4" style="background-image: url('{{ asset('images/villa/' . $villa->foto) }}');">
						</div>
						<h2>Apa itu {{ $villa->jenis_villa }}?</h2>
						<p>resort villa adalah sebuah rumah cluster yang dibuat berjejer menghadap ke suatu view utama,
                             baik itu berupa pemandangan alam atau landscape villa itu sendiri.
                             Oleh karena itu, suasana resort villa masih akan terasa lebih ramai daripada private villa.</p>					
                            </div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section">
	          	<div class="pl-md-5">
		            
					<p class="mb-2"><span class=" mr-1"> <strong>Villa Terbaik</strong> </span> <span class="per">#{{ $villa->status }}</span></p>
	            </div>
	          </div>
	          <div class="pl-md-5">
				            <h1 style = "font-family:courier,arial,helvetica;">Villa eart</h1>
							<p><strong>Detail Kelengkapan:</strong></p>
							<div class="row">
                            <div class="text p-4 p-xl-5 text-center">
    							<h3><p class="star mb-0" style="color:rgb(201, 175, 126);"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p></h3>
    							<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
	    						<h2 class="mb-3"><a href="rooms.html">{{ $villa->namavilla }}</a></h2>
                                <h4 class="mb-3"><a href="rooms.html">{{ $villa->harga }}</a></h4>
                                <h4>
									<ul class="list-accomodation">
	    							<li><span>Jumlah lantai:</span>{{ $villa->kamar }}</li>
	    							<li><span>Kamar Tidur:</span>{{ $villa->lantai }}</li>
									<li><span>Kamar Mandi:</span>{{ $villa->kamar_mandi }}</li>
									<li><span>Maksimal jumlah penghuni:</span>{{ $villa->kapasitas }}</li>	
	    							<li><span>View/Fasilitas:</span> {{ $villa->view }}</li>
	    							<li><span>Bed:</span> {{ $villa->kasur }}</li>
	    						</ul>
                                </h4>
                                
	    						{{-- <p><a href="{{ route('pemesanan.create') }}" class="btn" style="color:rgb(201, 175, 126);">Pesan sekarang </a></p>
								 --}}
    						</div>
		            
		          </div>  
						</div>
					</div>
				</div>
			</div>
	</section>
	<center>
	<h1 style = "font-family:courier,arial,helvetica;">Galeri Villa</h1>
	</center>

	<section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-2 d-flex services align-self-stretch px-1 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa1.webp')}}');"></div>
            </div>      
          </div>
          <div class="col-md-2 d-flex services align-self-stretch px-1 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa2.jpg')}}');"></div>
            </div>    
          </div>
          <div class="col-md-2 d-flex services align-self-stretch px-1 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa3.jpeg')}}');"></div>
            </div>      
          </div>
        </div>
    	</div>
    </section>

        {{-- <section class="ftco-intro" style="background-image: url('{{asset('assetn/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Ready to get started</h2>
						<p class="mb-4">It's safe to book online with us! Get your dream stay in clicks or drop us a line with your questions.</p>
						<p class="mb-0"><a href="{{url('villaroom')}}" class="btn btn-primary px-4 py-3">Lihat Lebih Banyak....</a> </p>
					</div>
				</div>
			</div>
		</section> --}}
@endsection