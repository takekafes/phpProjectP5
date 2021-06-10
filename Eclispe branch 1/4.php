<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container mt-3">
		<h2>Align Self</h2>
		<p>Control the vertical alignment of a specific flex item with the
			.align-self-* classes.</p>
		<p>.align-self-start:</p>
		<div class="d-flex bg-light" style="height: 150px">
			<div class="p-2 border">Flex item 1</div>
			<div class="p-2 border align-self-start">Flex item 2</div>
			<div class="p-2 border">Flex item 3</div>
		</div>
		<br>
		<p>.align-self-end:</p>
		<div class="d-flex bg-light" style="height: 150px">
			<div class="p-2 border">Flex item 1</div>
			<div class="p-2 border align-self-end">Flex item 2</div>
			<div class="p-2 border">Flex item 3</div>
		</div>
		<br>
		<p>.align-self-center:</p>
		<div class="d-flex bg-light" style="height: 150px">
			<div class="p-2 border">Flex item 1</div>
			<div class="p-2 border align-self-center">Flex item 2</div>
			<div class="p-2 border">Flex item 3</div>
		</div>
		<br>
		<p>.align-self-baseline:</p>
		<div class="d-flex bg-light" style="height: 150px">
			<div class="p-2 border">Flex item 1</div>
			<div class="p-2 border align-self-baseline">Flex item 2</div>
			<div class="p-2 border">Flex item 3</div>
		</div>
		<br>
		<p>.align-self-stretch (default):</p>
		<div class="d-flex bg-light" style="height: 150px">
			<div class="p-2 border">Flex item 1</div>
			<div class="p-2 border align-self-stretch">Flex item 2</div>
			<div class="p-2 border">Flex item 3</div>
		</div>
		<br>
	</div>

</body>
</html>
