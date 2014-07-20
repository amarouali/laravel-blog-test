
	<h3>{{$article->title}}  </strong></h3>
	<p>
		{{$article->full_text}}
		<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio possimus atque nihil adipisci neque rerum doloremque veniam obcaecati! Delectus itaque a nihil ipsa quo alias rem facilis, cupiditate saepe?</span>
		<span>Distinctio, nihil fugiat quae, quis dolores debitis unde eos qui excepturi reiciendis ex vero quasi facilis quam est nesciunt dolorum. Est libero nostrum id cum, voluptate eius accusamus minima eum.</span>
		<span>Dolor suscipit eos ipsam doloremque modi nesciunt, magni iure illum quo quod at iusto voluptatum accusantium. Sed alias commodi quod voluptates, magnam explicabo veritatis, accusamus sapiente sunt repellendus dicta? Ea?</span>
	</p>

	<blockquote>
  		<p>De <strong>{{$article->user->username}}</p>
	</blockquote>
	<hr>
	{{$comments ? '<h3>Les commentaires</h3><hr>':''}}
	@foreach ($comments as $comment)
		<div class="panel panel-info">
			<div class="panel-heading">
   			 <h3 class="panel-title">{{$comment->title}}</h3>
  			</div>
			<div class="panel-body">
			   {{$comment->text}}
			</div>
			<div class="panel-footer">{{$comment->user->username}}</div>
		</div>

			
				
	
	@endforeach


@if(Auth::check())
<hr>
<h4>Ajouter un commentaire</h4>

{{BootForm::open(new Comment,['action'=>'addcomment','placeholder'=>true])}}
{{Form::hidden('article_id',$article->id)}}
{{BootForm::text('title')}}
{{BootForm::textarea('text', 'Message')}}
{{BootForm::submit()}}
{{BootForm::close()}}


@else 
<hr>
<p>Pour commenter, il faut se connecter</p>
	@include('Users.login',array('user'=>new User))
@endif


