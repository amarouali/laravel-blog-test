
<h4>Se connecter</h4><hr>

{{BootForm::open($user,array('action'=>'login'))}}
{{BootForm::text('email','Votre Email :')}}
{{BootForm::password('password','Mot de passe :')}}
{{BootForm::submit()}}
{{BootForm::close()}}
<hr>
