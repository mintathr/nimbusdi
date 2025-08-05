<x-mail::message>
# Introduction
Halo {{ $contact['name'] }}

Terima kasih telah menghubungi kami. Berikut adalah pesan Anda:

{{ $contact['message'] }}

Kami akan segera membalasnya.

<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->

Thanks,<br>
PT Nimbusdi

<p style="text-align: center;">
    <img src="{{ asset('assets-nova/images/nimbus_logo.jpg') }}" alt="Logo {{ config('app.name') }}" style="height: 80px;">
</p>
</x-mail::message>
