<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <title></title> 
        {{HTML::style('http://getbootstrap.com/dist/css/bootstrap.min.css')}}


    </head> 
    <body>


    @include('Elements.menu')
           
    <div class="container">
      
      <div class="row">
        <div class="page-header">
          <h1>Blog <small>Laravel</small></h1>
        </div>
        
           @include('Elements.notif')
           @yield('content',$content)
      </div>
    </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="http://getbootstrap.com/assets/js/docs.min.js"></script>

    </body> 
 
</html>
                                