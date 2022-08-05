<!Doctype html>
<html>
	<head>
	<style>
		.hide {
			display: none;
		}
		body {
			background: #2ECC71;
		}
		#pass {
			padding: 5px;
			background: #27AE60;
			border: 2px round black;
		}
		#res {
			padding: 5px;
			background: #27AE60;
			border: 2px round black;
		}
	</style>
	<script>
		function submit() {
    			var pw = document.getElementById('password').value;
    			var form = document.getElementById('pass');
			var menu = document.getElementById('menu');
			var result = document.getElementById('res');
    			if(pw == 'admin') {
    			    menu.className = "";
			    form.className = "hide";
			    result.className = "";
    			}else {
			    menu.className = "hide";
			    result.className = "hide";
    			}
		};
	</script>
	</head>
	<body>
		<div id="pass">
			<input type="text" id="password"/>
			<button id="submit" onclick="submit()">Submit</button>
		</div>
		<div>
			<ul class="sidebar-nav hide" id="menu">
    		    		<li>
					<a href="add.html" style="color: black; text-decoration: none;">Add an App</a>
    		    		</li>
    				<li>
        				<a href="remove.html" style="color: black; text-decoration: none;">Remove an App</a>
    		    		</li>
    		    		<li> 
        				<a href="update.html" style="color: black; text-decoration: none;">Update an App</a>
    		    		</li>
			</ul>
		</div>
		<div id="res" class="hide">
			<?php session_start();
			if(isset($_POST["submit"])){
				$_SESSION["appName"] = $_POST["appName"];
				$_SESSION["webpage"] = $_POST["webpage"];
			}
			echo $_POST["appName"]; 
			echo " ";
			echo $_POST["webpage"]; 
			?> 
		</div>
	</body>
</html>
