@extends('master')
@section('contentMaster')
<br><br><br><br>
<h2 style="text-align: center">Chọn thẻ cào để thực hiện nạp tiền cho tài khoản của bạn</h2>
<br><br>
<section class="fetaure-page ">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
                    <a href="{{}}">
                        <img src="{{asset('img/img_card/20.png')}}" alt="" height="150px !important" class="w-100">
                        <h4 class="mt-3">Thẻ cào 20 nghìn đồng</h4>
                    </a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
                    <a href="">
                        <img src="{{asset('img/img_card/50.jpg')}}" alt="" style="border-radius: 20px !important" height="150px !important" class="w-100">
                        <h4 class="mt-3">Thẻ cào 50 nghìn đồng</h4>
                    </a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
                    <a href="">
					    <img src="{{asset('img/img_card/100.jpg')}}" alt="" height="150px !important" class="w-100">
                        <h4 class="mt-3">Thẻ cào 100 nghìn đồng</h4>
                    </a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item">
                    <a href="">
                        <img src="{{asset('img/img_card/200.jpg')}}" alt="" height="150px !important"  class="w-100">
                        <h4 class="mt-3">Thẻ cào 200 nghìn đồng</h4>
                    </a>
				</div>
			</div>
		</div>
    </div>
    <br><br><br><br>
</section>
@endsection