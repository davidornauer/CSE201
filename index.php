<!Doctype html>
<html>
	<head>
		<title>AppStack Home</title>
<script>
/* Lines 14 through 22 are from 
 * W3Schools
 * 8/5/2022
 * How To - Pop Up Form
 * JavaScript
 * source code
 * https://www.w3schools.com/howto/howto_js_popup_form.asp
 */
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target != modal) {
		modal.style.display = "none";
	}
};
/* Lines 31 through 83 are from 
 * W3Schools
 * 8/5/2022
 * How To - Sort a Table
 * JavaScript
 * source code
 * https://www.w3schools.com/howto/howto_js_sort_table.asp
 */
function sortTable(n) {
	var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
	table = document.getElementById("table");
	switching = true;
	// Set the sorting direction to ascending:
	dir = "asc";
	/* Make a loop that will continue until
	no switching has been done: */
	while (switching) {
		// Start by saying: no switching is done:
		switching = false;
		rows = table.rows;
		/* Loop through all table rows (except the
		first, which contains table headers): */
		for (i = 1; i < (rows.length - 1); i++) {
			// Start by saying there should be no switching:
			shouldSwitch = false;
			/* Get the two elements you want to compare,
			one from current row and one from the next: */
			x = rows[i].getElementsByTagName("td")[n];
			y = rows[i + 1].getElementsByTagName("td")[n];
			/* Check if the two rows should switch place,
			based on the direction, asc or desc: */
			if (dir == "asc") {
				if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
					// If so, mark as a switch and break the loop:
					shouldSwitch = true;
					break;
				}
			} else if (dir == "desc") {
				if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
					// If so, mark as a switch and break the loop:
					shouldSwitch = true;
					break;
				}
			}
		} if (shouldSwitch) {
			/* If a switch has been marked, make the switch
			and mark that a switch has been done: */
		rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
		switching = true;
		// Each time a switch is done, increase this count by 1:
		switchcount ++;
			} else {
			/* If no switching has been done AND the direction is "asc",
			set the direction to "desc" and run the while loop again. */
				if (switchcount == 0 && dir == "asc") {
					dir = "desc";
					switching = true;
				}
			}
	}
};

/* Lines 93 through 111 are from 
 * W3Schools
 * 8/5/2022
 * How To - Filter/Search Table
 * JavaScript
 * source code
 * https://www.w3schools.com/howto/howto_js_filter_table.asp
 */
function search() {
	// Declare variables
	var input, filter, table, td, i, txtValue;
	input = document.getElementById("search");
	filter = input.value.toUpperCase();
	table = document.getElementById("table");
	const tr = table.getElementsByTagName("tr");

	//Loop through all table rows, and hide those who don't match the search query
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		txtValue = td.textContent || td.innerText;
		if (txtValue.toUpperCase().indexOf(filter) > -1) {
			td.style.display = "";
		} else {
			td.style.display = "none";
		}
	}
};
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
</script>
<style>

/* Lines 124 through 230 are from 
 * W3Schools
 * 8/5/2022
 * How To - Pop Up Form
 * JavaScript
 * source code
 * https://www.w3schools.com/howto/howto_js_popup_form.asp
 */
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


/* Lines 242 through 250 are from 
 * W3Schools
 * 8/5/2022
 * How To - Filter/Search Table
 * JavaScript
 * source code
 * https://www.w3schools.com/howto/howto_js_filter_table.asp
 */
			//style information for the search bar
			  #search {
				  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
				  background-position: 10px 12px; /* Position the search icon */
				  background-repeat: no-repeat; /* Do not repeat the icon image */
				  font-size: 16px; /* Increase font-size */
				  padding: 12px 20px 12px 40px; /* Add some padding */
				  border: 1px solid #ddd; /* Add a grey border */
				  margin-bottom: 12px; /* Add some space below the input */
			  }
			  
			  // style information for the body
			  body{
				  margin: 0px;
				  border: 0px;
				  background: #2ECC71;
			  }
			  
			  // style information for the header class
			  #header {
				  height: 50px;
				  background: #2ECC71;
			  }
			  
			  // style information for the sidebar class
			  #sidebar {
				  width: 20%;
				  height: 400px;
				  background: #27AE60;
				  float: left;
				  border-top: 3px solid black;
				  border-bottom: 3px solid black;
				  border-right: 3px solid black;
			  }
			  
			  // style information for the data class
			  #data {
				  height: 700px;
				  background: #2ECC71;
				  padding-left: 25%;
				  padding-right: 5%;
			  }
			  
			  // style information for the unordered list			  
			  ul {
				  font-size: 0;
				  margin: 0px;
				  float: left;
			  }
			  
			  // style information for list items
			  ul li {
				  height: 199px;
				  font-size: 16px;
			  }
			  
			  //style information for the admin class
			  #admin {
				  border-bottom: 1px solid black;
			  }
			  
			  //style information for hover over list items
			  ul li:hover {
				  color: white;
				  background: #2ECC71;
			  }
			  
			  //style information for the table headers
			  th {
				  padding: 5px;
			  }
			  
			  //style information for the table
			  table {
				  border: 3px solid black;
				  background: #BDC3C7;
			  }
			  
			  //style information to set up a dividing line between table columns
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
		
		<!--
		Lines 317 through 350 are from 
		W3Schools
		8/5/2022
		How To - Pop Up Form
		JavaScript
		source code
		https://www.w3schools.com/howto/howto_js_popup_form.asp
		-->
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
		<!-- this div contains links to the respective pages -->
			<ul>
				<a href= "admin.php" style="color: black; text-decoration: none"><li id="admin">Admin Page</li></a>
				<a href= "form.html"  style="color: black; text-decoration: none"><li>App Request Form</li></a>
			</ul>
		</div>

		<div id="data">
		<!-- this div contains the search box and table information -->
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
