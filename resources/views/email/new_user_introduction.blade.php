@component('mail::message')
{{ $toUser->name }}さんこんにちは！

新しく{{ $newUser->name }}さんが参加しましたよ!

@endcomponent
