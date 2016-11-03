{!! Form::open() !!}
<div class="form-group">
    {!! Form::label('name', 'Имя: *') !!}
    {!! Form::text('name', isset($msg->name)?$msg->name:null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::text('email', isset($msg->email)?$msg->email:null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('message', 'Текст сообщения: *') !!}
    {!! Form::textarea('message', isset($msg->message)?$msg->message:null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit(!isset($msg)?'Добавить':'Изменить', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
