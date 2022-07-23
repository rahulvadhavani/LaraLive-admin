@component('mail::message')
# Contact Request

## Hello, {{strtoupper($maildata['adminName'])}}
<br>
{{strtoupper($maildata['name'])}} want to contact to you,

@component('mail::panel')
    Mail Detail
@endcomponent

<b>Name</b> : {{strtoupper($maildata['name'])}} <br>
<b>Email</b> : {{$maildata['email']}} <br>

<b>Subject</b> : {{$maildata['subject']}} <br>
## message : 
{{$maildata['message']}} <br><br>



Thanks,<br>
{{ config('app.name') }}
@endcomponent