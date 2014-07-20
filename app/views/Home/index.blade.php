

@foreach ($articles as $article)
	<div class="col-lg-6 col-md-6 col-xs-12">
		

			<h3>{{$article->title}} </h3>
			<p>{{$article->intro_text}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi blanditiis quos ullam tempora beatae libero, reiciendis cupiditate consequatur, inventore asperiores, quasi possimus, similique praesentium. Quis quod tempora unde perspiciatis aliquam!</p>
			<p><a href="{{URL::route('show',$article->id)}}" class='btn btn-info '>Lire la suite</a></p>
		
	</div>
@endforeach

<div class="col-lg-12 col-md-12 col-xs-12">
	  @if (method_exists($articles,'links'))
        {{$articles->links()}}
    @endif


</div>