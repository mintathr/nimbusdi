<x-mail::message>
# Introduction
Hello {{ $contact['name'] }}

Thank you for contacting us. We have received your message as follows:

{{ $contact['message'] }}

We will respond to it promptly.

<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->

Best regards,<br>
PT Nimbus Dinamis Indonesia

<!-- <p style="text-align: center;">
    <img src="{{ asset('assets-nova/images/nimbus_logo.jpg') }}" alt="Logo {{ config('app.name') }}" style="height: 80px;">
</p> -->
</x-mail::message>
