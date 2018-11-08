<!DOCTYPE html>
<html lang="en">
<head>
<title>Cedar High Tagging</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 15px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>

<div class="header">
  <h1>Cedar High Tagging</h1>
</div>

<div class="topnav">
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Do we still need a nav bar?</a>
</div>
<div>
	<p> </p>
	<input type="date" id="date">
</div>

<div class="row">
  <div class="column">
    <h2>Students to tag</h2>
	<td>
		<table>
			<tr>
				<td>
				<?php
					
					$dbh = new PDO('sqlite:CHSxlt.db') or die("cannot connect to database");
					$sql = "SELECT * FROM User WHERE RoleId = 3";
					$query = $dbh->query($sql);
					$result = $query->fetch(PDO::FETCH_ASSOC);
					foreach($result as $res){
						echo $res . "<br>";
					}
				?>
				</td>
			</tr>
		</table>
	</td>
  </div>
  <div class="column">
    <h2>Tagged students</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
</div>

</body>
</html>
