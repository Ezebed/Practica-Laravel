<!-- se comprueba se llegan mensages con GET -->
@if($message = Session::GET('success'))
    <p class="messageNotification success">{{ $message }}</p>
@endif

@if($message = Session::GET('danger'))
    <p class="messageNotification danger">{{ $message }}</p>
@endif