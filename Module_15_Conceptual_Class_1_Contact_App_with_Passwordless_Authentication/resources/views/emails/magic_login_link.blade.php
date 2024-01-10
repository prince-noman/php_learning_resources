<x-mail::message>
# Your Magic Link



<x-mail::button :url="$url">
Log in
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
