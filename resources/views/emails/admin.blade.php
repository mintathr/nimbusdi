<x-mail::message>
Halo Admin

Anda menerima pesan baru dari {{ $contact['name'] }}.

<ul>
        <li><strong>Email:</strong> {{ $contact['email'] }} </li>
        <li><strong>Industri:</strong> {{ $contact['industry'] }} </li>
        <li><strong>HP:</strong> {{ $contact['phone_number'] }} </li>
        <li><strong>Nama Perusahaan:</strong> {{ $contact['company_name'] }} </li>
        <li><strong>Pesan:</strong> {{ $contact['message'] }} </li>
</ul>


Thanks,<br>
{{ config('app.name') }}

<!-- <p style="text-align: center;">
    <img src="{{ asset('assets-nova/images/nimbus_logo.jpg') }}" alt="Logo {{ config('app.name') }}" style="height: 80px;">
</p> -->
</x-mail::message>