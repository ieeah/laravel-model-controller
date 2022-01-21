@extends('layouts.main_layout')

@section('content')
<h1>pagina film</h1>
	<div class="movies_main">
		@forelse ($movies as $movie)
			<div class="movie_card">
				<div class="top_card">
					<h2 class="title">Titolo: {{$movie->title}}</h2>
					<h4 class="org_title">Titolo originale: {{$movie->original_title}}</h4>
				</div>
				<div class="bottom_card">
					<p class="description">descrizione che nel DB non c'è ma ci stava metterla nella card</p>
					<h6 class="date">{{$movie->date}}</h6>
					<h5>{{$movie->vote}}</h5>
				</div>
			</div>
		@empty
			<h2>nessun film in Database</h2>
		@endforelse
		</div>
@endsection