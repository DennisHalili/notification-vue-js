<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notification | Alerts</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="theme.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<my-alert-app type="success" message="Sample Success"></my-alert-app>
				<my-alert-app type="info" message="Sample Info"></my-alert-app>
				<my-alert-app type="warning" message="Sample Warning"></my-alert-app>
				<my-alert-app type="danger" message="Sample Danger"></my-alert-app>

                <template id="alert-template">
                	<div class="notif {{ type }} animated" transition="bounce" v-show="visible">
	                    <div class="n-icon"><i class="{{ alertIcon }}" aria-hidden="true"></i></div>
	                    <div class="n-con"><span>{{ type }}</span>{{ message }}</div>
	                    <div class="n-close"><i class="fa fa-times" aria-hidden="true" @click="visible = ! visible"></i></div>
	                </div>
                </template>

			</div>
		</div>
	</div>

	<!-- Latest compiled and minified FontAwesome -->
	<script src="https://use.fontawesome.com/127339a88c.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	<script src="notification.js"></script>

</body>
</html>