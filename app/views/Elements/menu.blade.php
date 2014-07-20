{{BootMenu::navBar(
      array(
        'title'=>'Blog',
        'class'=>'inverse',
        'link' =>URL::to('/'),

        ),array(
          'left'	=>$categories,
          'right'	=>array(
						array(
							'title'	=>'Mon Compte',
							'link'	=>URL::route('login'),
							'dropdown'=>array(
								array(
									'title'=>'Me connecter',
									'link'	=>URL::route('login'),
									'show'	=>!Auth::check()
									),
								array(
									'title'=>'Me déconnecter',
									'link'	=>URL::to('logout'),
									'show'	=>Auth::check()
									),
								array(
									'title'=>'Voir mon profil',
									'link'	=>URL::route('profil'),
									'show'	=>Auth::check()
									),
								array(
									'title'=>"M'inscrire",
									'link'	=>URL::route('signup'),
									'show'	=>!Auth::check()
									)
								)
						)
          	)
         )
  )}} 