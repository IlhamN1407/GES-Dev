@component('mail::message')
# Terimakasih telah melakukan penawaran
Silahkan Click tombol ini untuk melanjutkan penawaran.

@component('mail::button', ['url' => 'https://wa.me/6285280428152?text=Saya%20sudah%20mengirim%20form'])
Chat us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
