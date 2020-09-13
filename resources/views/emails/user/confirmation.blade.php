@component('mail::message')
# Introduction

Dear,{{$name}},
Your confirmation code is: {{$code}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
