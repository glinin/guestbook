<div class="messages">
@if (!$message->isEmpty())
	@foreach($message as $msg)
		<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				<span>{{$msg->name}}</span>
				<span class="pull-right label label-info">{{$msg->created_at}}</span>
			</h3>
		</div>
		<div class="panel-body">{{$msg->message}}<hr/>
			<div class="pull-right">
				
                                {{ Form::open(array('url'=>'message/delete/'.$msg->id)) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <a class="btn btn-info" href="{{ URL::to('message/'.$msg->id.'/edit') }}"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i></button> 
                                {{ Form::close() }}                                                              
			</div>
		</div>
		</div>
	@endforeach
	<div class="text-center">
	{!! $message->render() !!}
	</div>
@endif
</div>