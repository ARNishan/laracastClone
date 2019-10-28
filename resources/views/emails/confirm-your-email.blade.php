@component('mail::message')
# One More step before join with us

We need you to confirm your email

@component('mail::button', ['url' => ''])
Confirm Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
