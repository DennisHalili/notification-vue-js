Vue.component('my-alert-app', {
	template: '#alert-template',

	data: function() {
		return {
			visible: true
		}
	},

	props: {
		type: '',
		message: ''
	},

	computed: {
		alertIcon: function() {
			switch(true) {
				case this.type == 'success':
					return 'fa fa-check-circle';
					break;
				case this.type == 'warning':
					return 'fa fa-exclamation-circle';
					break;
				case this.type == 'danger':
					return 'fa fa-times-circle';
					break;
				default:
					return 'fa fa-info-circle';
					break;
			}
		}
	},

	transitions: {
		bounce: {
			enterClass: 'fadeInDown',
			leaveClass: 'fadeOutDown'
		}
	}
});

new Vue({

	el: 'body',

});