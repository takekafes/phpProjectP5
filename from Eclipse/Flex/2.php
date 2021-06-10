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
		<h2>Horizontal Direction</h2>
		<p>Use .flex-row to make the flex items appear side by side (default):</p>
		
		<div class="d-flex flex-row bg-secondary mb-3">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
		
		<p>Use .flex-row-reverse to right-align the direction:</p>
		
		<div class="d-flex flex-row-reverse bg-secondary">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
	</div>



	<div class="container mt-3">
		<h2>Vertical Direction</h2>
		<p>Use .flex-column to display the flex items vertically (on top of
			each other):</p>
		<div class="d-flex flex-column mb-3">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
		<p>Use .flex-column-reverse to reverse the vertical direction:</p>
		<div class="d-flex flex-column-reverse">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
	</div>




	<div class="container mt-3">
		<h2>Justify content</h2>
		<p>Use the .justify-content-* classes to change the alignment of flex
			items. Choose from start (default), end, center, between or around:</p>
		<div class="d-flex justify-content-start bg-secondary mb-3">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
		<div class="d-flex justify-content-end bg-secondary mb-3">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
		<div class="d-flex justify-content-center bg-secondary mb-3">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
		<div class="d-flex justify-content-between bg-secondary mb-3">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
		<div class="d-flex justify-content-around bg-secondary mb-3">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
	</div>



	<div class="container mt-3">
		<h2>Fill / Equal Widths</h2>
		<p>Use .flex-fill on flex items to force them into equal widths:</p>
		<div class="d-flex mb-3">
			<div class="p-2 flex-fill bg-info">Flex item 1</div>
			<div class="p-2 flex-fill bg-warning">Flex item 2</div>
			<div class="p-2 flex-fill bg-primary">Flex item 3</div>
		</div>
		<p>Example without .flex-fill:</p>
		<div class="d-flex mb-3 bg-secondary">
			<div class="p-2 bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
	</div>




	<div class="container mt-3">
		<h2>Auto Margins</h2>
		<p>Easily add auto margins to flex items with .mr-auto (push items to
			the right), or by using .ml-auto (push items to the left):</p>
			
		<div class="d-flex mb-3 bg-secondary">
			<div class="p-2 mr-auto bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 bg-primary">Flex item 3</div>
		</div>
		
		
		<div class="d-flex mb-3 bg-secondary">
			<div class="p-2  bg-info">Flex item 1</div>
			<div class="p-2 bg-warning">Flex item 2</div>
			<div class="p-2 ml-auto bg-primary">Flex item 3</div>
		</div>
	</div>

</body>
</html>
