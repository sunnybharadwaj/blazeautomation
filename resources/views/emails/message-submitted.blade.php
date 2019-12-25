@component('mail::message')
## You've got a new message:
###{{$message->message}}

####Sender Details:
- Name : {{$message->name}}
- Email : {{$message->email}}
- Phone : {{$message->phone}}
- Location : {{$message->location}}
- Business Type : {{$message->businesstype}}

Thanks,<br>
Chakra Bot<br>
blazeautomation.com
@endcomponent
