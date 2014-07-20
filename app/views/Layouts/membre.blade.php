<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <title></title> 
        {{HTML::style('css/main.css')}}

    </head> 
    <body>
<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">Bonjour  {{Auth::user()->username}} !</a></h1>
        </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li ><a href="{{URL::to('logout')}}">Se déconnecter</a></li>

            </ul>
        </section>
     
    </nav>
</div>
        <div class="row">
        	@if (Session::has('notif'))
        		<div data-alert class="alert-box  {{Session::get('notif.type')}}">
        		  {{Session::get('notif.message')}}
        		  <a href="#" class="close">&times;</a>
        		</div>
        	@endif

            @yield('content',$content)
       </div>

       


    </body> 
 
</html>
                                