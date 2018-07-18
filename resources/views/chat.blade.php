<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>Chatroom</h1>
    {!! Form::open(['action'=>'MyController@sendMessage','method'=>'POST']) !!}
    <div class ="form-group">
        {{Form::text('msg','',['class'=>'form-control','placeholder'=>'write your message'])}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
    
</body>
</html>