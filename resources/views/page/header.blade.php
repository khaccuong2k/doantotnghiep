<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:nkcuong.18i@cit.udn.vn"><i class="icofont-support-faq mr-2"></i>nkcuong.18i@cit.udn.vn</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>41 Lê Duẩn Đà Nẵng</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						
						@if (Auth::check())
						<a href="{{route('profile',Auth::user()->id)}}" >
							<span>{{Auth::user()->username}}&ensp;<i class="fa fa-credit-card" aria-hidden="true"></i></span>
						</a>&emsp;
						<a href="{{route('logout')}}" >
							<span>Đăng Xuất</span>
						</a>
						@else
						<a href="{{route('login')}}" >
							<span>Đăng Nhập</span>
						</a>&emsp;
						<a href="{{route('register')}}" >
							<span>Đăng Ký</span>
						</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="{{route('index')}}">
			  	<img src="{{asset('novena/images/logo.png')}}" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{route('index')}}">Trang Chủ</a>
			  </li>
			  <li class="nav-item"><a class="nav-link" href="{{route('event')}}">Sự Kiện</a></li>
			  <li class="nav-item"><a class="nav-link" href="{{route('rank')}}">Bảng Xếp Hạng</a></li>
			  
			  <li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể Loại <i class="icofont-thin-down"></i></a>
				  <ul class="dropdown-menu" aria-labelledby="dropdown02">
					  @foreach ($type as $item)
					  	<li><a class="dropdown-item" href="{{route('detail-categories',$item->id)}}">{{$item->name}}</a></li>
					  @endforeach
				  </ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="{{route('about')}}">Giới Thiệu</a></li>
			   <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Liên Hệ</a></li>
			</li>
		</ul>

		<div class="form__group field">
			<form action="" method="post">
				<input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
				<label for="name" class="form__label">Tìm kiếm...</label>
			</form>
		</div>

		  </div>
		</div>
	</nav>
</header>