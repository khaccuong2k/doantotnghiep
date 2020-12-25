@extends('master')
@section('contentMaster')
<section class="banner" style="position: relative;overflow: hidden;background: #fff;background: url('@foreach ($event as $item) {{asset('upload/img/img_event')}}/{{$item->img}} @endforeach') no-repeat;background-size: cover;min-height: 550px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				@foreach ($event as $item)
					<div class="block">
						<div class="divider mb-3"></div>
						<span class="text-uppercase text-sm letter-spacing ">{{$item->name}}</span>
						{{-- <h1 class="mb-3 mt-3" hidden>Your most trusted health partner</h1> --}}
						<br><br>
						{{-- <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p> --}}
						<div class="btn-container ">
							<a href="{{route('booking')}}" class="btn btn-main-2 btn-icon btn-round-full">Đặt Vé <i class="icofont-simple-right ml-2  "></i></a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					@foreach ($event as $item)
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>Địa chỉ :</span>
						<h4 class="mb-3">{{$item->name}}</h4>
						<p class="mb-4">{{$item->address}}</p>
						
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Thời gian :</span>
						<h4 class="mb-3">{{$item->date}}</h4>
						<ul class="w-hours list-unstyled">
							<a href="{{route('booking')}}" class="btn btn-main btn-round-full">Đặt Vé</a>
		                    {{-- <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li> --}}
		                    {{-- <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li> --}}
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Với sự góp mặt của :</span>
						<h4 class="mb-3">Ca sĩ :</h4>
						<p>{{$item->singers}}</p>
						{{-- <p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p> --}}
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<br><br><br><br><br><br><br><br>

<section class="section service gray-bg">
	<div class="container">
		{{-- goi y cho hom nay --}}
		<h1 style="margin-left: 100px"><a href="{{route('detail')}}">Gợi Ý Cho Hôm Nay <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h1>
		<div class="row">
			@foreach ($songRandum as $item)
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="service-item mb-4" style="height: 380px !important">
						<div class="content">
							<a href="{{route('detail-song',$item->id)}}">
								<img src="{{asset('upload/img/img_song')}}/{{$item->img}}" width="100%" height="250px" alt="">
							</a>
						</div>
						<div style="text-align:center;margin-top:20px">
							<a href="{{route('detail-song',$item->id)}}">
								<h4>{{$item->name}}</h4>
							</a>
							@foreach ($singer as $itemm)
								@if ($item->id_singer == $itemm->id)
									<h5>Ca Sĩ : {{$itemm->name}}</h5>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<br><br><br>
		{{-- new --}}
		<h1 style="margin-left: 100px"><a href="{{route('detail')}}">Bài Hát Mới <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h1>
		<div class="row">
			@foreach ($newSong as $item)
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="service-item mb-4" style="height: 380px !important">
						<div class="content">
							<a href="{{route('detail-song',$item->id)}}">
								<img src="{{asset('upload/img/img_song')}}/{{$item->img}}" width="100%" height="250px" alt="">
							</a>
						</div>
						<div style="text-align:center;margin-top:20px">
							<a href="{{route('detail-song',$item->id)}}">
								<h4>{{$item->name}}</h4>
							</a>
							@foreach ($singer as $itemm)
								@if ($item->id_singer == $itemm->id)
									<h5>Ca Sĩ : {{$itemm->name}}</h5>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<br><br><br>
		{{-- nhac cach mang --}}
		<h1 style="margin-left: 100px"><a href="{{route('detail')}}">Nhạc Cách Mạng <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h1>
		<div class="row">
			@foreach ($cmSong as $item)
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="service-item mb-4" style="height: 380px !important">
						<div class="content">
							<a href="{{route('detail-song',$item->id)}}">
								<img src="{{asset('upload/img/img_song')}}/{{$item->img}}" width="100%" height="250px" alt="">
							</a>
						</div>
						<div style="text-align:center;margin-top:20px">
							<a href="{{route('detail-song',$item->id)}}">
								<h4>{{$item->name}}</h4>
							</a>
							@foreach ($singer as $itemm)
								@if ($item->id_singer == $itemm->id)
									<h5>Ca Sĩ : {{$itemm->name}}</h5>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<br><br><br>
		{{-- bolero --}}
		<h1 style="margin-left: 100px"><a href="{{route('detail')}}">Bolero <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h1>
		<div class="row">
			@foreach ($song1 as $item)
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="service-item mb-4" style="height: 380px !important">
						<div class="content">
							<a href="{{route('detail-song',$item->id)}}">
								<img src="{{asset('upload/img/img_song')}}/{{$item->img}}" width="100%" height="250px" alt="">
							</a>
							</div>
						<div style="text-align:center;margin-top:20px">
							<a href="{{route('detail-song',$item->id)}}">
								<h4>{{$item->name}}</h4>
							</a>
							@foreach ($singer as $itemm)
								@if ($item->id_singer == $itemm->id)
									<h5>Ca Sĩ : {{$itemm->name}}</h5>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<br><br><br>
		{{-- nhac tre  --}}
		<h1 style="margin-left: 100px"><a href="{{route('detail')}}">Nhạc Trẻ <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h1>
		<div class="row">
			@foreach ($song as $item)
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="service-item mb-4" style="height: 380px !important">
						<div class="content">
							<a href="{{route('detail-song',$item->id)}}">
								<img src="{{asset('upload/img/img_song')}}/{{$item->img}}" width="100%" height="250px" alt="">
							</a>
							</div>
						<div style="text-align:center;margin-top:20px">
							<a href="{{route('detail-song',$item->id)}}">
								<h4>{{$item->name}}</h4>
							</a>
							@foreach ($singer as $itemm)
								@if ($item->id_singer == $itemm->id)
									<h5>Ca Sĩ : {{$itemm->name}}</h5>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<br><br><br>
		{{-- hiphop  --}}
		<h1 style="margin-left: 100px"><a href="{{route('detail')}}">Hiphop Never Die <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </h1>
		<div class="row">
			@foreach ($hiphopSong as $item)
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="service-item mb-4">
						<div class="content">
							<a href="{{route('detail-song',$item->id)}}">
								<img src="{{asset('upload/img/img_song')}}/{{$item->img}}" width="100%" height="300px" alt="">
							</a>
						</div>
						<div style="text-align:center;margin-top:20px">
							<a href="{{route('detail-song',$item->id)}}">
								<h4>{{$item->name}}</h4>
							</a>
							@foreach ($singer as $itemm)
								@if ($item->id_singer == $itemm->id)
									<h5>Ca Sĩ : {{$itemm->name}}</h5>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<br><br><br>
	</div>
</section>

{{-- <section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>We served over 5000+ Patients</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="{{asset('novena/images/team/test-thumb1.jpg')}}" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="{{asset('novena/images/team/test-thumb2.jpg')}}" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="{{asset('novena/images/team/test-thumb3.jpg')}}" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="{{asset('novena/images/team/test-thumb4.jpg')}}" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
						<p class="mt-4">
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="{{asset('novena/images/team/test-thumb1.jpg')}}" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
	
</section>
<br><br><br><br><br>
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/1.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/2.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/3.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/4.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/5.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/6.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/3.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/4.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/5.png')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="{{asset('novena/images/about/6.png')}}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section> --}}
@endsection