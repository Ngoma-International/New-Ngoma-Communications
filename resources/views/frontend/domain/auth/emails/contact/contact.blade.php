@component('mail::message')
# {{ $contact['motif'] }}

## {{ $contact['username'] }}

> {{ $contact['content'] }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
