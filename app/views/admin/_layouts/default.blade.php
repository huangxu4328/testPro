<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>StoneSecretary</title>

	@include('admin._partials.assets')

</head>

<body>

	<div class="container">

		<div class="navbar navbar-inverse navbar-fixed-top">

			<div class="navbar-inner">

				<div class="container">

					<a href="{{URL::route('admin.pages.index')}}" class="brand">

						StoneSecretary

					</a>


					@include('admin._partials.navigation')

				</div>

			</div>

		</div>

		<hr>

		@yield('main')

	</div>

</body>

</html>