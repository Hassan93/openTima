<!DOCTYPE html>
<html>
		<head>
			@include('partials._logedinuserheader')
		</head>
		<body>
			<div class="ui divider">

  		</div>
			<div class="ui grid">
			  <div class="four wide column">
						@yield('side_nav')
				</div>
			  <div class="twelve wide column">
						@yield('content')
				</div>
      </div>
		</body>
</html>
<script type="text/javascript">
$('.ui.dropdown').dropdown('hide');
</script>
