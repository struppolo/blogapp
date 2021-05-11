@component('mail::message')
# Post Inserito

Hai inserito il post con titolo {{ $post->titolo }}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/posts/' . $post->id])
Vedi il post
@endcomponent

Grazie,<br>
{{ config('app.name') }}
@endcomponent