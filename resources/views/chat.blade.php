
@extends('layouts.app')

@section('content')

	<div id="app">
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h3 class="panel-title">
                        Chatroom
                        <span class="badge pull-right">@{{ usersInRoom.length }}</span>
                    </h3>
                </div>
                <div class="panel-body">
					<chat-log :messages="messages"></chat-log>
					<chat-composer @messagesent="addMessage"></chat-composer>
				</div>
            </div>
        </div>
    </div>

@endsection