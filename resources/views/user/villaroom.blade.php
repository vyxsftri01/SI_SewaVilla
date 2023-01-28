@extends('layouts.user')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assetn/images/villa.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Rooms <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Villa Room</h1>
          </div>
        </div>
      </div>
    </section>
   
    <section class="ftco-section bg-light">
			<div class="container-fluid px-md-5">
      @php $no = 1; @endphp
            @foreach ($villa as $data) 
				<div class="row no-gutters justify-content-center pb-5 mb-3" >
          <!-- <div class="col-md-7 heading-section text-center ftco-animate">
            <h2> Hireath Villa</h2>
          </div> -->
        </div>
               
				<div class="row no-gutters" >
    			<div class="row-lg-6">
    				<div class="room-wrap d-md-flex" style="background-color:rgb(142, 181, 244);">
    					<a href="#" class="img" style="background-image: url('{{ $data->image() }}'); width:1000px;"></a>
    					<div class="half arrow d-flex align-items-center" style="background-color:rgb(142, 181, 244);" >
    						<div class="text p-4 p-xl-5 text-center" >
    							<p class="star mb-0 " ><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star" ></span></p>
    							<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
	    						<h3 class="mb-3"><a href="rooms.html">{{ $data->namavilla }}</a></h3>
	    						<ul class="list-accomodation">
	    							<li><span>Jumlah lantai: </span> {{ $data->lantai }} Lantai</li>
									<li><span>Maksimal jumlah penghuni:</span>{{ $data->kapasitas }}</li>	
	    							<li><span>View:</span>{{ $data->view }} </li>
	    							
	    						</ul>
	    						<p class="pt-1"><a href="{{ route('villa.show', $data->id) }}" class="btn-custom px-3 py-2">Lihat Detail Villa<span class="icon-long-arrow-right"></span></a></p>
								  						</div>
    					</div>
    				</div>
    			</div>
    		</div>
        @endforeach
			</div>
		</section>

    @endsection