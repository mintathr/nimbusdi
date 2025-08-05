<x-mail::message>
Halo Admin

Anda menerima pesan baru dari {{ $contact['name'] }}.

<ul>
        <li><strong>industry:</strong> {{ $contact['industry'] }} </li>
        <li><strong>phone_number:</strong> {{ $contact['phone_number'] }} </li>
        <li><strong>company_name:</strong> {{ $contact['company_name'] }} </li>
        <li><strong>message:</strong> {{ $contact['message'] }} </li>
</ul>


Thanks,<br>
{{ config('app.name') }}

<p style="text-align: center;">
    <img src="{{ asset('assets-nova/images/nimbus_logo.jpg') }}" alt="Logo {{ config('app.name') }}" style="height: 80px;">
</p>
</x-mail::message>