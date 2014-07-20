<?php

class HomeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /matches
	 *
	 * @return Response
	 */
	public function index($id=null)
	{
		
		$articles= Article::paginate(4);
		
		if($id){
			$articles=Categorie::find($id)->articles()->orderBy('created_at', 'desc')->get();
		}
			
			$this->layout->nest('content','Home.index',compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /matches/create
	 *
	 * @return Response
	 */
	public function addcomment()
	{	

		$rules =[
			'title'	=>'required',
			'text'		=>'required'
		];

		if(Request::isMethod('POST')){
		$validation = Validator::make(Input::all(), $rules);

					if($validation->fails()){
						return Redirect::back()->withInput()->withErrors($validation);
					}
			
				}
		Comment::create([
				'title'=>Input::get('title'),
				'text'=>Input::get('text'),
				'user_id'=>Auth::user()->id,
				'article_id'=>Input::get('article_id')
			]);
		return Redirect::back()->with(['notif'=>['message'=>'Votre commentaire est ajouté','type'=>'success']]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /matches
	 *
	 * @return Response
	 */
	public function find()
	{
		
		$articles=Article::select('id', 'title', 'intro_text')
                            ->orderBy('created_at', 'desc')
                            ->where('intro_text', 'like', '%'.Input::get('match').'%')
                            ->orwhere('full_text', 'like', '%'.Input::get('match').'%')
                            ->get();
                       
       if($articles->isEmpty()){
			Session::flash('notif', ['message'=>'Il n y a aucun résultat avec '.Input::get('match'),'type'=>'info']);
       }else{
			Session::flash('notif', ['message'=> $articles->count().' Résultats pour la recherche du terme '.Input::get('match'),'type'=>'info']);
       }
     	
         $this->layout->nest('content','Home.index',compact('articles'));
	}

	/**
	 * Display the specified resource.
	 * GET /matches/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		$article = Article::findOrFail($id);
		$comments = $article->comments()->with('user')->orderBy('created_at', 'desc')->get();
		
		View::share('actif', $article->categorie->id);
		$comment =new Comment;
		
		$this->layout->nest('content','Home.show', compact('article','comments','comment'));
		
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /matches/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /matches/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /matches/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}