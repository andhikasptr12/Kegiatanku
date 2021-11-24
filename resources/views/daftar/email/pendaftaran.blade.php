@component('mail::message')

<p>Hallo, {{$register->user->name}}</p>
<p>Terimakasih telah melakukan pendaftaran dalam kegiatan kami.
    silahkan buka link ini untuk melakukan upload bukti pembayaran anda
    dengan kode pembayaran
</p>
<P>Kode Pendaftaran : {{$register->activity->kode_activity}}</P>
@component('mail::button', ['url' => "http://localhost/kegiatanku/public/user/ambil-form/{$register->id}"])
    upload pembayaran
@endcomponent
@endcomponent 