@component('mail::message')
you have been invited
<br>
fill the form to confirm your invitation
@component('mail::button',['url'=>'http://127.0.0.1:8000/dashboard'])
  form
@endcomponent

congrates
@endcomponent