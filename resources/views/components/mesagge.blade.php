<div class='p-3'>
    @if(session('message') && session('type'))
    <div class='alter alert-{{session("type")}} p-3'>
    {{session("message")}}
    </div>
    @endif

    @if($errors->any())
    <div class='alter alert-danger p-3'>
        <ul>
            @foreach($errors->all() as $error)  
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>