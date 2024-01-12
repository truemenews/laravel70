<!DOCTYPE html>
 <html lang="{{ app()->getLocale() }}">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
 
     <title>Test</title>
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <script src="{{ asset('js/app.js') }}"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
 </head>
 <body>
     <script type="module">
        Pusher.logToConsole = true;

        Echo.private('user.{{ $user_id }}')
        .listen('App\Events\NewMessageNotification', (e) => {
           alert(e.message.message);
        });
     </script>

    <h1>Pusher Test, user.{{$user_id}}</h1>

    <p>
        Try publishing an event to channel <code>user{{ $user_id }}</code>
        with event name <code>my-event</code>.
    </p>

 </body>
 </html>