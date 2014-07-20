<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <title></title> 
        {{HTML::style('http://getbootstrap.com/dist/css/bootstrap.min.css')}}


    </head> 
    <body>
{{BootMenu::navBar(
      array(
        'title'=>'Admin',
        'class'=>'inverse',
        'link' =>URL::route('dash'),

        ),array(
          'lef'=>array(
                    array(
                        'title'=>'Voir le site',
                        'link' =>URL::to('/'),
                    ),
                    array(
                        'title'=>'Articles',
                        'link' =>URL::to('/'),
                    ),
                    array(
                        'title'=>'Catégories',
                        'link' =>URL::to('/'),
                    )
            ),   
          'right'   =>array(
                        array(
                            'title' =>'Mon Compte',
                            'link'  =>URL::route('login'),
                            'dropdown'=>array(
                                array(
                                    'title'=>'Me connecter',
                                    'link'  =>URL::route('login'),
                                    'show'  =>!Auth::check()
                                    ),
                                array(
                                    'title'=>'Me déconnecter',
                                    'link'  =>URL::to('logout'),
                                    'show'  =>Auth::check()
                                    ),
                                array(
                                    'title'=>'Voir mon profil',
                                    'link'  =>URL::route('profil'),
                                    'show'  =>Auth::check()
                                    ),
                                array(
                                    'title'=>"M'inscrire",
                                    'link'  =>URL::route('signup'),
                                    'show'  =>!Auth::check()
                                    )
                                )
                        )
            )
         )
  )}} 

<div class="container">
     @include('Elements.notif')
     @yield('content',$content)
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="http://getbootstrap.com/assets/js/docs.min.js"></script>

    </body> 
 
</html>
                                