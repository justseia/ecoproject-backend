@if(!Request::is('login') && !Request::is('register'))
	<nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
		<div class="container-fluid md:px-8 px-3">
			<a class="logo" href="{{ route('home.index') }}">
				<img src="{{asset('assets/images/logo.png')}}" class="inline-block dark:hidden h-[64px]" alt="">
				<img src="{{asset('assets/images/logo-light.png')}}" class="hidden dark:inline-block h-[24px]" alt="">
			</a>
			<div class="menu-extras">
				<div class="menu-item">
					<a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
						<div class="lines">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</a>
				</div>
			</div>
			<ul class="buy-button list-none mb-0">
				@if(Auth::check())
					<li class="inline mb-0">
						<a href="{{ route('profile.index') }}" class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i data-feather="user" class="h-4 w-4 stroke-[3]"></i></a>
					</li>
				@endif
				@if(!Auth::check())
					<li class="sm:inline ltr:pl-1 rtl:pr-1 mb-0 hidden">
						<a href="{{ route('login') }}" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Login</a>
					</li>
				@endif
			</ul>
			<div id="navigation">
				<ul class="navigation-menu justify-center">
					<li><a href="{{ route('home.index') }}" class="sub-menu-item">Home</a></li>
                    <li><a href="{{ route('case.index') }}" class="sub-menu-item">Case</a></li>
					<li><a href="{{ route('blog.index') }}" class="sub-menu-item">Blog</a></li>
					<li><a href="{{ route('about.index') }}" class="sub-menu-item">About</a></li>
					<li><a href="{{ route('contact.index') }}" class="sub-menu-item">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
@endif
