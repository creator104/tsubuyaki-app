
@component('mail::message')
@csrf

{{ $toUser->name }}さん、こんにちは！

@component('mail::panel')
新しく{{ $newUser->name }}さんが参加しましたよ!
@endcomponent

@component('mail::button', ['url' => route('tweet.index')])
    つぶやきを見に行く
@endcomponent


@endcomponent



{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
