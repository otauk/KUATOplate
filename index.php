<!DOCTYPE html>
<html>
	<head>
		<title>KUATOplate</title>
		<meta charset="utf-8">
		<meta http-equiv="expires" content="0">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<!-- Font -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!-- Stylesheet -->
		<link href="css/custom-base.css" rel="stylesheet" type="text/css"/>
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	</head>
	<body>
		<ul class="navigation">
			<li class="nav-item"><a href="#">Home</a></li>
			<li class="nav-item"><a href="#">Portfolio</a></li>
			<li class="nav-item"><a href="#">About</a></li>
			<li class="nav-item"><a href="#">Blog</a></li>
			<li class="nav-item"><a href="#">Contact</a></li>
		</ul>
		<input type="checkbox" id="nav-trigger" class="nav-trigger" />
		<label for="nav-trigger"></label>


		<div class="site-wrap">
			<div class="mobile_nav"></div>
			<div class="header"></div>
			<div class="navi">
				<nav>
					<ul>
		                <li class = "cat1">
		                    <a class="navitem" href="#">Home</a>
		                </li>
		                <li class = "cat2">
		                    <a class="navitem" href="#">Über uns</a>
		                    <ul>
		                        <li><a href="#">Wer wir sind</a></li>
		                        <li><a href="#">Was wir machen</a></li>
		                        <li><a href="#">Unsere Ziele</a></li>
		                        <li><a href="#">Unser Team</a></li>
		                    </ul>
		                </li>
		                <li class = "cat3">
		                     <a class="navitem"  href="#">Leistungen</a>
		                     <ul>
		                         <li><a href="#">Webdesign</a></li>
		                         <li><a href="#">Programmierung</a></li>
		                         <li><a href="#">Online Marketing</a></li>
		                         <li><a href="#">Suchmaschinenoptimierung</a></li>
		                     </ul>
		                </li>
		                <li class = "cat4">
		                    <a class="navitem"  href="#">Referenzen</a>
		                    <ul>
		                        <li><a href="#">Webseiten</a></li>
		                        <li><a href="#">Themes & Templates</a></li>
		                        <li><a href="#">Plugins</a></li>
		                    </ul>
		                </li>
		                <li class = "cat5">
		                    <a class="navitem" href="#">Kontakt</a>
		                    <ul>
		                        <li><a href="#">Deutschland</a></li>
		                        <li><a href="#">Amerika</a></li>
		                        <li><a href="#">Spanien</a></li>
		                    </ul>
		                </li>
		            </ul>
				</nav>
        </div>
			<div class="main">
				<h1>Headline h1</h1>
				<p>
					Some text in a paragraph
				</p>
				<h2>headline h2</h2>
				<p>
					Lorem ipsum dolor sit amet, <a href="#">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<div class="container outline">
				    <div class="row">
				        <div class="col-1"><p>col-1</p></div>
				        <div class="col-1"><p>col-1</p></div>
				        <div class="col-1"><p>col-1</p></div>
				        <div class="col-1"><p>col-1</p></div>
				        <div class="col-1"><p>col-1</p></div>
				        <div class="col-1"><p>col-1</p></div>
				    </div>
				    <div class="row">
				        <div class="col-2"><p>col-2</p></div>
				        <div class="col-2"><p>col-2</p></div>
				        <div class="col-2"><p>col-2</p></div>
				    </div>
				    <div class="row">
				        <div class="col-3"><p>col-3</p></div>
				        <div class="col-3"><p>col-3</p></div>
				    </div>
				    <div class="row">
				        <div class="col-4"><p>col-4</p></div>
				        <div class="col-2"><p>col-2</p></div>
				    </div>
				    <div class="row">
				        <div class="col-5"><p>col-5</p></div>
				        <div class="col-1"><p>col-1</p></div>
				    </div>
				    <div class="row">
				        <div class="col-6"><p>col-6</p></div>
				    </div>
				</div>
				<p>
					<input type="text" name="name" />
				</p>
				<ul>
					<li>Item 1</li>
					<li>Item 2
						<ul>
							<li>Sub-Item 2.1</li>
							<li>Sub-Item 2.2
								<ul>
										<li>Sub-Item 2.2.1</li>
										<li>Sub-Item 2.2.2</li>
								</ul>
							</li>
							<li>Sub-Item 2.3</li>
						</ul>
					</li>
					<li>Item 3</li>
				</ul>

				<table class="tbl">
					<tr>
						<th>Column 1</th>
						<th>Column 2</th>
						<th>Column 3</th>
					</tr>
					<tr>
						<td>Block 1</td>
						<td>Block 2</td>
						<td>Block 3</td>
					</tr>
					<tr>
						<td>Block 1</td>
						<td>Block 2</td>
						<td>Block 3</td>
					</tr>
					<tr>
						<td>Block 1</td>
						<td>Block 2</td>
						<td>Block 3</td>
					</tr>
				</table>


				<button class="btn primary">Button 1</button>
				<button class="btn success">Button 2</button>
				<button class="btn info">Button 3</button>
				<button class="btn warning">Button 4</button>
				<button class="btn danger">Button 5</button>
				<div class="alert primary">Standard</div>
				<div class="alert success">Erfolg</div>
				<div class="alert info">Hinweis</div>
				<div class="alert warning">Warnung</div>
				<div class="alert danger">Gefahr</div>
			</div>
			<div class="footer">
			</div>
		</div>
	</body>
</html>
