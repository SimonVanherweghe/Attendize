@extends('Emails.Layouts.Master')

@section('message_content')

    <p>{{trans('emails.hello')}}</p>
    <p>{{trans('emails.message.intro',['name'=>(isset($sender_name) ? $sender_name : $event->organiser->name) , 'event'=> $event->title])}}</p>
    <p style="padding: 10px; margin:10px; border: 1px solid #f3f3f3;">
        {{nl2br($message_content)}}
    </p>
    <p>{!! trans('emails.message.contact',['sender'=>(isset($sender_name) ? $sender_name : $event->organiser->name) ,'mail'=>(isset($sender_email) ? $sender_email : $event->organiser->email) ]) !!}</p>
@stop

@section('footer')


@stop
