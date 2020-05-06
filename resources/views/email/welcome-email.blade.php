@component('mail::message')
# Introduction

Welcome to our site!

Happy slacking!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Cheers,<br>
{{ config('app.name') }}
@endcomponent
