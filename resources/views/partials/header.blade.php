<header>
	<h1>Movies Website</h1>
	<ul>
		<li>
			<a href="{{route('home')}}"
			@if (Request::route()->getName() === 'home') class="active" @endif
			>
			Home Page
		</a>
		</li>
		<li>
			<a href="{{route('movies')}}"
			@if (Request::route()->getName() === 'movies') class="active" @endif
			>
			Movies Page
		</a>
		</li>
	</ul>
</header>