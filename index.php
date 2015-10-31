<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KuaiDi Query Demo</title>
	<script src="jquery-2.1.4.min.js" type="text/javascript"></script>
	<script>
		function queryNum() {
			var num = $("#num").val();
			$.get('query.php?num='+num, function(data) {
				//Data process
				$('#result').html(data);
			});
		}
	</script>
</head>
<body>
	KuaiDi Number: <input type="text" name="num" id="num"><br>
	<button onclick="javascript: queryNum();">Click to Test!</button><br>
	<div id="result">
		Here shows the demo result output.
	</div>
</body>
</html>