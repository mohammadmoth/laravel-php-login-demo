@component('mail::message')
# Passwordless

This demo passwordless , where you click on this url . It will activate the mail if it is not activated, in addition to logging in directly


@component('mail::button', ['url' => $Url])
Magic link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
