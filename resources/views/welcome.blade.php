<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
			.hrefna
			{
				color:black;text-decoration:none;font-size:18px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5 Oblagios!</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<p>&nbsp;</p>
				<div><a class  = 'hrefna' target="_blank" href = '{{ url("/admin/default") }}'>Ini adalah Halaman Utama / Frontend , Klik disini untuk kehalaman backend :)</a></div>
			</div>
		</div>
	</body>
</html>
