@extends('layouts.user')

@section('content')
@foreach ($data as $data) 
<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('assetn/images/bgvilla.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">{{ $data->title }}</h2>
          	<h1 class="mb-4">{{ $data->judul }}</h1>
          </div>
          </div>
      </div>
</div>
@endforeach

   
    <section class="ftco-section ftco-services">
    	<div class="container"> 
    		<div class="row">
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa1.webp')}}');"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Bounches villa</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa2.jpg')}}');"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Crystal villa</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa3.jpeg')}}');"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Zalisni villa</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>{{ $data->destitle }}</h2>
            <h4>{{ $data->deskripsi}}</h4>
            <p></p>
          </div>
        </div>
        <hr>
        <center>
          <h1 class="mb-4">Lokasi Villa eArther</h1>
        </center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8495568013163!2d107.60861261424391!3d-6.908586069531614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e637c1c36e73%3A0x9253217aae9c858d!2sBandung%20Indah%20Plaza!5e0!3m2!1sid!2sid!4v1674870382221!5m2!1sid!2sid" 
        width="1280" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        {{-- <div class="row ftco-animate">
          <div class="col-md-12">
          <center>
      <p><a href="{{ route('review.create') }}" class="btn" style="background-color:rgb(201, 175, 126);">Berpartisipasi-></a></p>

      </center>
            <div class="carousel-testimony owl-carousel" > --}}
            {{-- @php $no = 1; @endphp --}}
                    {{-- @foreach ($review as $data)
							<div class="item">
                <div class="testimony-wrap d-flex" >
                  <div class="user-img" style="background-image: url('{{asset('images/profile/index.jpg')}}')">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center" >
                      <i class="fa fa-quote-left" style="color:rgb(201, 175, 126);"></i>
                    </span>
                    <p>{{ $data->pesan }}</p>
                    <p class="name">{{ $data->identitas->nama }}</p>
                    <span class="position">{{ $data->villas->nama_villa }}</span>
                  </div>
                </div>
              </div>
              @endforeach
						</div>
          </div> --}}
        </div>
      </div>
    </section>


    
 @endsection
