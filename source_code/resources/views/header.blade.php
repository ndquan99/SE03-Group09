<div id="header">
		<div class="header-top">
			<div class="container-fluid">
				<div class="col-md-6" style="font-site:20px">
					
						<marquee style="font-size: 22px;color:red;margin-top:10px">Liên hệ với chúng tôi:<i class="fa fa-phone">0987xxxxxx</marquee>	
					
				</div>
				<div class="pull-right auto-width-right">
				
					<ul class="top-details menu-beta l-inline">
					@if(Auth::check())
						<li><a href="">Chào bạn {{Auth::user()->full_name}}</a></li>
						<li><a href="{{route('admin.news.getList')}}">Quản trị</a></li>
						<li><a href="{{route('logout')}}">Đăng xuất</a></li>
					@else
						<li><a href="{{route('signin')}}">Đăng kí</a></li>
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
					@endif

					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
						<li><a >Tour du lịch</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('tintuc.html')}}">Bài viết</a></li>
						<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
						<li><a href="{{route('lienhe')}}">Liên hệ</a></li>
						
					</ul>
					
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->