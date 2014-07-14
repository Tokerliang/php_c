<html>
<head>
	<script type='text/javascript'>
		function cacl(){
			var num_1 = parseInt(document.getElementById('n_1').value);
			var num_2 = parseInt(document.getElementById('n_2').value);
			var  c = document.getElementById('select').value;
			switch(c){
				case '+': var sum=num_1+num_2;break;
				case '-': var sum=num_1-num_2;break;
				case '*': var sum=num_1*num_2;break;
				case '/': var sum=num_1/num_2;break;
			}
			document.getElementById('result').value = sum;
		}
	</script>
</head>
<body>
	<input type='text' id='n_1' />
	<select id='select'>
		<option value='+'>+</option>
		<option value='-'>-</option>
		<option value='*'>*</option>
		<option value='/'>/</option>
		
	</select>

	<input type='text' id='n_2' />
	<br />
	<input type='button' value='=' onclick='cacl()' />
	<br />
	<input type='text' id='result'>
</body>
</html>