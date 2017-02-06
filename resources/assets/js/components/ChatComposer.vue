<template lang="html">
	<div class="chat-composer">
		<input type="text" id="message" placeholder="Type your message here" v-model="inputMessage" @keyup.enter="sendMessage">
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

				if(this.inputMessage.trim() == '')
					return false;

				this.$emit('messagesent', {
					message: this.inputMessage,
					user: {
						name: $('.navbar-right .dropdown-toggle').text()
					}
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