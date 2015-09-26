<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>TH Captcha</title>
<style type="text/css">
	body {
		background: #666;
	}
	.captcha-box {
		display: block;
		width: 250px;
		border: 1px solid #eee;
		overflow: hidden;
		background: #fff;
		margin: 0 auto;
	}
	.captcha-box > .captcha-group {
		display: table;
	}
	.captcha-box > .captcha-group > input {
		display: table-cell;
		width: 200px;
		height: 35px;
		padding: 10px;
		border: 0;
		font-size: 16px;
		outline: none;
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
	}
	.captcha-box > .captcha-group > button {
		display: table-cell;
		width: 50px;
	}
	button {
		padding: 10px;
		background-color: #333;
		color:#fff;
		border: 0;
		cursor: pointer;
		outline: none;
		width: 33.33%;
	}
	button:hover {
		background-color: #000;
	}
</style>
</head>
<body>
<form onsubmit="send(this);return false;">
	<div class="captcha-box">
		<img src="captcha.php" width="100%;" style="margin-bottom: -5px;" />
		<div class="captcha-group">
			<input type="text" id="captcha" name="captcha" placeholder="Insert captcha code."/>
			<button type="submit">OK</button>
			<div id="btn"></div>
		</div>
	</div>
</form>
<script type="text/javascript">
window.onload = function(){
	var text_input = document.getElementById ('captcha');
	text_input.focus ();
	text_input.select ();
	get();
}
function send(data) {
	var formData = new FormData(data);
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST", 'check.php');
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4) {
				console.log(xmlhttp.responseText);
				if (xmlhttp.responseText === 'PASS') {
					alert('pass');
					location.reload();
				} else {
					alert('wrong');
					location.reload();
				}
			}
		}
	xmlhttp.send(formData);
}
function get() {
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET", 'captcha.php?json=true');
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4) {
				var data = JSON.parse(xmlhttp.responseText);
				for(var list in data) {
					console.log(data[list]);
					var node = document.createElement('button');
					var textnode = document.createTextNode(data[list]);
					node.setAttribute('name', 'captcha');
					node.setAttribute('type', 'submit');
					node.setAttribute('value', data[list]);
					node.appendChild(textnode);
					var btn_contents = document.getElementById('btn');
					btn_contents.appendChild(node);
				}
			}
		}
	xmlhttp.send();
}
</script>
</body>
</html>
