@extends('Emails.Layouts.Master')

@section('message_content')
    {{trans('emails.hello')}}  {{$attendee->first_name}},<br><br>

    {!! trans('emails.resend',['event'=>$attendee->order->event->title]) !!}
<br><br>
    {{trans('emails.regards')}}
@stop
