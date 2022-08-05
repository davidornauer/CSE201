<!Doctype html>
<html>
	<head>
		<title>AppStack Home</title>
<script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
</script>
		<style>
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
	width: 100%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
	border: none;
	background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
	background-color: #ddd;
	outline: none;
}

/* Set a style for all buttons */
button {
	background-color: blue;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 35 px;
	opacity: 0.9;
}

button:hover {
	opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
	padding: 14px 20px;
	background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
	float: left;
	width: 50%;
}

/* Add padding to container elements */
.container {
	padding: 16px;
}

/* The Modal (background) */
.modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: #474e5d;
	padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
	background-color: #fefefe;
	margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	border: 1px solid #888;
	width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
	border: 1px solid #f1f1f1;
	margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
	position: absolute;
	right: 35px;
	top: 15px;
	font-size: 40px;
	font-weight: bold;
	color: #f1f1f1;
}

.close:hover,
.close:focus {
	color: #f44336;
	cursor: pointer;
}

/* Clear floats */
.clearfix::after {
	content: "";
	clear: both;
	display: table;
}

			  /* Change styles for cancel button and signup button on extra small screens */
			  @media screen and (max-width: 300px) {
				  .cancelbtn, .signupbtn {
					  width: 100%;
				  }
			  }

			  #search {
				  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
				  background-position: 10px 12px; /* Position the search icon */
				  background-repeat: no-repeat; /* Do not repeat the icon image */
				  font-size: 16px; /* Increase font-size */
				  padding: 12px 20px 12px 40px; /* Add some padding */
				  border: 1px solid #ddd; /* Add a grey border */
				  margin-bottom: 12px; /* Add some space below the input */
			  }
			  body{
				  margin: 0px;
				  border: 0px;
				  background: #2ECC71;
			  }
			  #header {
				  height: 50px;
				  background: #2ECC71;
			  }
			  #sidebar {
				  width: 20%;
				  height: 400px;
				  background: #27AE60;
				  float: left;
				  border-top: 3px solid black;
				  border-bottom: 3px solid black;
				  border-right: 3px solid black;
			  }
			  #data {
				  height: 700px;
				  background: #2ECC71;
				  padding-left: 25%;
				  padding-right: 5%;
			  }
			  ul {
				  font-size: 0;
				  margin: 0px;
				  float: left;
			  }
			  ul li {
				  height: 199px;
				  font-size: 16px;
			  }
			  #admin {
				  border-bottom: 1px solid black;
			  }
			  ul li:hover {
				  color: white;
				  background: #2ECC71;
			  }
			  th {
				  padding: 5px;
			  }
			  table {
				  border: 3px solid black;
				  background: #BDC3C7;
			  }
			  #left-bor{
				  border-right: 3px solid black;
			  }
			  .left-bor {
				  border-right: 3px solid black;
			  }
		</style>
	</head>
	<body>
		<div id="header">
			<!-- Button to open the modal -->
			<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
			<br>
			<br>
			<!-- The Modal (contains the Sign Up form) -->
			<div id="id01" class="modal">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
				<form class="modal-content" action="index.php">
					<div class="container">
						<h1>Sign Up</h1>
						<p>Please fill in this form to create an account.</p>
						<hr>
						<label for="email"><b>Email</b></label>
						<input type="text" placeholder="Enter Email" name="email" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>

						<label for="psw-repeat"><b>Repeat Password</b></label>
						<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

						<label>
							<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
						</label>

						<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

						<div class="clearfix">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							<button type="submit" class="signup">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<br>
		<br>
		<div id="sidebar">
			<ul>
				<a href= "admin.php" style="color: black; text-decoration: none"><li id="admin">Admin Page</li></a>
				<a href= "form.html"  style="color: black; text-decoration: none"><li>App Request Form</li></a>
			</ul>
		</div>

		<div id="data">
			<center>
				<input type="text" id="search" onkeyup="search();" placeholder="Search table...">
				<table id="table" class="freeze-table" width="100%">
					<thead>
						<tr>
							<th onclick="sortTable(0)" id="left-bor" class="col-name fixed-header">App Name</th>
							<th onclick="sortTable(1)" id="left-bor" class="col-desc fixed-header">Description</th>
							<th onclick="sortTable(2)" id="left-bor" class="col-org fixed-header">Organization</th>
							<th onclick="sortTable(3)" id="left-bor" class="col-plat-vers fixed-header">Platforms and Versions</th>
							<th onclick="sortTable(4)" id="left-bor" class="col-link fixed-header">Link</th>
							<th onclick="sortTable(5)" class="col-price fixed-header">Price</th>

						</tr>
					</thead>
					<tr>
						<td class="left-bor">Instagram</td>
						<td class="left-bor">photo and video sharing social networking service</td>
						<td class="left-bor">Instagram</td>
						<td class="left-bor">Android <br> iOS <br> Fire OS <br> Windows </td>
						<td class="left-bor"> <a href="https://apps.apple.com/us/app/instagram/id389801252">iOS</a> <br> <a href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en_US&gl=US">Google Play</a> <br> <a href="https://apps.microsoft.com/store/detail/instagram/9NBLGGH5L9XT">Windows</a></td>
						<td>Free</td>
					</tr>
					<tr>
						<td class="left-bor">Reddit</td>
						<td class="left-bor">gaming communities, nostalgic internet forums, bloggers, meme-makers, and fandoms mingle alongside video streamers, support groups, news junkies, armchair experts, seasoned professionals, and artists and creators of all types</td>
						<td class="left-bor">reddit Inc. </td>
						<td class="left-bor">Online Webpage <br> Android <br> iOS </td>
						<td class="left-bor"> <a href="https://apps.apple.com/us/app/reddit/id1064216828">iOS</a> <br> <a href="https://play.google.com/store/apps/details?id=com.reddit.frontpage&hl=en_US&gl=US">Google Play</a> </td>
						<td>Free </td>
				</table>
			</center>
		</div>
	</body>
</html>
