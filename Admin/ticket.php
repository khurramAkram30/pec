

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ticket</title>
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<style>
@import url("https://fonts.googleapis.com/css2?family=Barlow&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body,
html {
	height: 100vh;
	display: grid;
	font-family: "Barlow", sans-serif;
	background: none;
	color: black;
	font-size: 14px;
	letter-spacing: 0.1em;
}

.ticket {
	margin: auto;
	display: flex;
	background: white;
	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}

.left {
	display: flex;
}

.image {
	height: 250px;
	width: 200px;
	/* background-image: url(""); */
	background-size: 100%;
	margin-left: 0 15px;
	background-repeat: no-repeat;
	opacity: 1;
	margin-left: 10px;
	margin-top: 10px;
}

.admit-one {
	position: absolute;
	color: darkgray;
	height: 250px;
	padding: 0 10px;
	letter-spacing: 0.15em;
	font-size: 12px;
	display: flex;
	text-align: center;
	justify-content: space-around;
	writing-mode: vertical-rl;
	transform: rotate(-180deg);
}

.admit-one span:nth-child(2) {
	color: white;
	font-weight: 700;
}

.left .ticket-number {
	height: 250px;
	width: 350px;
	display: flex;
	justify-content: flex-end;
	align-items: flex-end;
	padding: 10px;
	color: white;
}

.ticket-info {
	padding: 10px 20px;
	display: flex;
	flex-direction: column;
	text-align: center;
	justify-content: space-between;
	align-items: center;
}

.date {
	border-top: 1px solid gray;
	border-bottom: 1px solid gray;
	padding: 5px 0;
	font-weight: 700;
	display: flex;
	align-items: center;
	justify-content: space-around;
}

.date span:first-child {
	text-align: left;
	width: 100px;
}

.date span:last-child {
	text-align: right;
	width: 100px;
}

.date .nov-10 {
	color: #d62839;
	font-size: 20px;
	width: 150px;
}

.show-name {
	font-size: 20px;
	color: #d62839;
	font-weight: 700;
}

.show-name h1 {
	font-size: 36px;
	letter-spacing: 0.05em;
	margin-bottom: 4px;
	color: #93229f;
	font-family: "Saira Stencil One", sans-serif;
}

.time {
	color: #505050;
	text-align: center;
	display: flex;
	flex-direction: column;
	gap: 10px;
	font-weight: 700;
}

.time span {
	font-weight: 400;
	color: gray;
}

.left .time {
	font-size: 16px;
	margin-bottom: 10px;
}

.tagline {
	font-style: italic;
	font-weight: 700;
	font-size: 16px;
}

.location {
	display: flex;
	justify-content: space-between;
	align-items: center;
	width: 100%;
	padding-top: 8px;
	border-top: 1px solid gray;
	font-weight: 700;
}

.location span:first-child {
	text-align: left;
}

.location span:last-child {
	text-align: right;
}

.location .separator {
	font-size: 20px;
}

.right {
	width: 225px;
	border-left: 1px dashed #404040;
}

.right .admit-one {
	color: darkgray;
}

.right .admit-one span:nth-child(2) {
	color: #505050;
}

.right .right-info-container {
	/* height: 250px; */
	padding: 10px 10px 10px 30px;
	display: flex;
	flex-direction: column;
	justify-content: space-evenly;
	align-items: center;
}

.right .show-name h1 {
	font-size: 18px;
	font-family: "Barlow", sans-serif;
}

.right .time {
	margin-top: 10px;
}

.barcode {
	height: 135px;
}

.barcode img {
	height: 100%;
}

.right .ticket-number {
	color: #505050;
	font-weight: 700;
}
</style>
</head>

<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<div class="ticket">
<div class="left">
	<div class="image">
		<img src=".././pec-img/favicon.webp" alt="" style="height:250px">
		<p class="admit-one">
			<!-- <span>ENTRY  PASS</span> -->
			<!-- <span>ENTRY  PASS</span> -->
			<!-- <span>ENTRY  PASS</span> -->
		</p>
		<div class="ticket-number">
			<p>
				<!-- #20200702 -->
			</p>
		</div>
	</div>
	<div class="ticket-info">
		<p class="date">
			<span>MONDAY</span>
			<span class="nov-10">May 8th</span>
			<span>
				<?php
				// Generating a random number
				$randomNumber = rand();
				print_r($randomNumber);
				print_r("\n");

				// Generating a random number in a
				// Specified range.
				// $randomNumber = rand(15,35);
				// print_r($randomNumber);
				?></span>
		</p>
		<div class="show-name">
			<h1>4TH PEC </h1>
			<h2>DEANS CONFERENCE</h2>
		</div>
		<div class="time">
			<p>10:30 AM <span>TO</span> 02:00 PM</p>
		</div>
		<div class="tagline">
			<p>INTERNATIONAL ENGINEERING DEANS CONFERENCE</p>
		</div>
		<!-- <p class="location"><span>THE CAT'S CRADLE</span> -->
		<!-- <span class="separator"><i class="fa-solid fa-cross"></i></span><span>ANDALUCÍA, SPAIN</span> -->
		<!-- </p> -->
	</div>
</div>
<div class="right">
	<p class="admit-one">
		<span>TICKET PASS</span>
		<span>TICKET PASS</span>
		<!-- <span>ADMIT ONE</span> -->
	</p>
	<div class="right-info-container">
		<div class="show-name">
			<h1>#PEC CONFERENCE</h1>
		</div>
		<div class="time">
			<p>08.05.2023</p>
			<p>10:30 AM <span>TO</span> 02:00 PM</p>
		</div>
		<div class="barcode">
			<?php

			require_once "phpqrcode/qrlib.php";

			// Generate the QR code data for the new person
			$ticket_data = "Khurram";
			QRcode::png($randomNumber, "ticket_qr.png", "L", 10, 5);

			// Display the ticket with the QR code
			echo '<img src="ticket_qr.png" alt="Ticket with QR code"/>';

			// Check if the QR code has been scanned
			if (isset($_GET['qr_data'])) {
				$qr_data = $_GET['qr_data'];
				if ($qr_data == $ticket_data) {
					echo "QR code scanned successfully!";
				} else {
					echo "Error: Invalid QR code!";
				}
			}

			?>
		</div>
		<p class="ticket-number">
			<span>
				<?php
				// Generating a random number
				// $randomNumber = rand();
				print_r($randomNumber);
				// print_r("\n");

				// Generating a random number in a
				// Specified range.
				// $randomNumber = rand(15,35);
				// print_r($randomNumber);
				?></span>
		</p>
	</div>
</div>
</div>
<div class="col-md-3">
				<input class="btn btn-success" id="printpagebutton" type="button" value="Print"
					onclick="printpage()" />
			</div>
</html>
</body>
<?php

// $html2pdf = new Html2Pdf();
// $html2pdf->writeHTML('<h1 style="color:pink;">CodeWall PDF</h1> <br/> <p>Convert this HTML to PDF please!</p>');
// $html2pdf->output('myPdf.pdf); // Generate and load the PDF in the browser.

// // $html2pdf->output('myPdf.pdf, 'D'); // Generate the PDF execution and force download immediately.

?>

<!-- <a href="ticket.php">Download PDF file</a> -->

<script type="text/javascript">
function printpage() {

var printButton = document.getElementById("printpagebutton");
//Set the print button visibility to 'hidden' 
printButton.style.visibility = 'hidden';

//Print the page content
window.print()
//Set the print button to 'visible' again 
printButton.style.visibility = 'visible';
}
</script>




