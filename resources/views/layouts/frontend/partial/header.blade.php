<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="#" class="logo">Moner School</a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('post.index') }}">Posts</a></li>
			@guest
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
                @if(Auth::user()->role->id == 1)
                    <li><a href="{{ route('admin.dashboard') }}">Profile</a></li>
                @endif
                @if(Auth::user()->role->id == 2)
                    <li><a href="{{ route('reguser.dashboard') }}">Profile</a></li>
                @endif
            @endguest
			</ul><!-- main-menu -->

			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" type="text" placeholder="Type of search">
				</form>
			</div>

		</div><!-- conatiner -->
</header>