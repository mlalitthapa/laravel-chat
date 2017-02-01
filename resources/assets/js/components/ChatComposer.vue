<template lang="html">
	<div class="chat-composer">
		<input type="text" placeholder="Type your message" v-model="inputMessage" @keyup.enter="sendMessage">
		<button class="btn btn-primary" @click="sendMessage">Send</button>
	</div>
</template>

<script>
	export default {
		data: function() {
			return {
				inputMessage: ''
			}
		},
		methods: {
			sendMessage: function() {
				this.$emit('messagesent', {
					message: this.inputMessage,
					user: 'John Doe'
				});
				this.inputMessage = '';
			}
		}
	}
</script>

<style lang="css">
	.chat-composer {
		display: flex;
	}

	.chat-composer input {
		flex: 1 auto;
	}

	.chat-composer button {
		border-radius: 0;
	}
</style>