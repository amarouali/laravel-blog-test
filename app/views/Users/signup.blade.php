<h1>M'inscrire</h1>
{{BootForm::open($user,['action'=>'signup'])}}
{{BootForm::text('username')}}
{{BootForm::text('email')}}
{{BootForm::password('password')}}
{{BootForm::password('password_confirmation')}}
{{BootForm::submit()}}
{{BootForm::close()}}

