<x-mail::message>
# Welcome to Our App

Thank you for registering.

<x-mail::button :url="''">
Login
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
