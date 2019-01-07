<!DOCTYPE html>
<html>
<head>

	<title>Namų d. API</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="files/reset.css">
	<link rel="stylesheet" type="text/css" href="03.css">

	<script src="03.js"></script>

</head>
<body>
<header>
	<!--            <h1>Namų darbas API - įgyvendinimas</h1>-->
</header>

<!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/API/Background_Tasks_API -->

<p>
	Demonstration of using <a href="https://developer.mozilla.org/en-US/docs/Web/API/Background_Tasks_API">
		cooperatively scheduled background tasks</a> using the <code>requestIdleCallback()</code>
	method.
</p>

<div class="container">
	<div class="label">Decoding quantum filament tachyon emissions...</div>
	<progress id="progress" value="0"></progress>
	<div class="button" id="startButton">
		Start
	</div>
	<div class="label counter">
		Task <span id="currentTaskNumber">0</span> of <span id="totalTaskCount">0</span>
	</div>
</div>

<div class="logBox">
	<div class="logHeader">
		Log
	</div>
	<div id="log">
	</div>
</div>
</body>
</html>





