@extends('layouts.app')

@section('content')

<div class="row">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		<h1>Comments</h1>

		<ul id="comments-list" class="comments-list">
    @foreach($comments as $comment)
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="{{URL::asset('/images/user.png')}}" alt=" {{ $comment->user->name}}"></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author text-capitalize"> 
             <a href="users/{{$comment->user->id}}"> {{ $comment->user->first_name}} {{ $comment->user->last_name}}
             - {{ $comment->user->email}}</a>
              </h6>
							<span> {{ $comment->created_at}}</span>
						</div>
						<div class="comment-content">
            {{ $comment->body }}
						</div>
            <div class="comment-content text-info">
            {{ $comment->url }}
						</div>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
			</li>	
      @endforeach
		</ul>
	</div>
	</div>

@endsection