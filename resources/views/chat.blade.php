<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chatroom</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<div id="app">
		<h1>Chatroom</h1>
		<chat-log :messages="messages"></chat-log>
		<chat-composer @messagesent="addMessage"></chat-composer>
	</div>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>