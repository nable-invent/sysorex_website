@component('mail::message')
{{
    $msg['title']
}}

{{$msg['body']}}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
