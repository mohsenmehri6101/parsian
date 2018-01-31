<!DOCTYPE html>
<html>
<head>
    <title>
        FormHtml
    </title>
    <!--
    <link rel="stylesheet" type="text/css" href="dist/bootstrap.min.css">
    -->
    {!! Html::style('dist/bootstrap.min.css') !!}
</head>
<body>
    {!! Html::link('#adress link','title link',['id'=>'id1','class'=>'link alert']) !!}
    {!! Html::ul(['item1','item2','item3']) !!}
    <ul>
        <li>item1</li>
        <li>item2</li>
        <li>item3</li>
    </ul>
    {!! Html::image('assets/img/1.jpg','this is alt',['title'=>'this is title']) !!}
    {!! Form::open(['url'=>'/login','files'=>true,'class'=>'form','style'=>'background-color:gray;']) !!}
        {!! Form::label('name','name',['class'=>'text text-align text-primary']) !!}
        {!! Form::text('name','',['placeholder'=>'enter name ...','class'=>'text']) !!}
        {!! Form::textarea('de') !!}
        {!! Form::email('email','',['class'=>'input']) !!}
        {!! Form::number('number') !!}
        {!! Form::hidden('hi') !!}
        {!! Form::file('file1') !!}
        {!! Form::submit('sub1',['class'=>'btn btn-default']) !!}
    {!! Form::close() !!}
    </div>
</body>
</html>