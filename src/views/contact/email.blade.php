@component('mail::message')
    # Introduction

    This is a message from {{$contact->name}}.
    <br>
    Message: {{$contact->message}}

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
