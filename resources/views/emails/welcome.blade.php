@component('mail::message')
# Terima kasih telah melakukan penawaran
Silahkan Click tombol ini untuk melanjutkan penawaran.

@component('mail::button', ['url' => 'https://wa.me/6281398951775?text=Saya%20sudah%20mengirim%20form'])
Hubungi Kami
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
