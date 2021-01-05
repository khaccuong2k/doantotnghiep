@extends('master')
@section('contentMaster')
<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Kết quả tìm kiếm</h2>
					<div class="divider mx-auto my-4"></div>
					{{-- <p>Today’s users expect effortless experiences. Don’t let essential people and processes stay stuck in the past. Speed it up, skip the hassles</p> --}}
				</div>
			</div>
		</div>

		<div class="row">
            @foreach ($song as $item)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-block mb-5 mb-lg-0">
                        <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="" class="img-fluid w-100">

                        <div class="content">
                            <h4 class="mt-4 mb-0"><a href="doctor-single.html">{{$item->name}}</a></h4>
                            @foreach ($singer as $itemm)
                                @if ($itemm->id == $item->id_singer)
                                    <p>Ca sĩ : {{$itemm->name}}</p>
                                @endif
                            @endforeach
                            <p>Lượt nghe : {{$item->views}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

			{{-- <div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/2.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Marshal Root</a></h4>
						<p>Surgeon, Сardiologist</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/3.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Siamon john</a></h4>
						<p>Internist, General Practitioner</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block">
					<img src="images/team/4.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Rishat Ahmed</a></h4>
						<p>Orthopedic Surgeon</p>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
</section>
@endsection