<?php
// Run this in your webserver
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Madeindonesia-BackEnd Basic Test</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Playfair+Display:wght@400;500;800&display=swap" />
</head>

<style>

</style>

<body>
	<!-- navbar -->
	<!-- Given array -->
	<?php
	$menu = array(
		array(
			'tabName' => 'Home',
			'content' => 'This is content for Home-tab. Please display me in the correct tab menu.'
		),

		array(
			'tabName' => 'About',
			'content' => 'This is content for ABOUT. Please display me in the correct tab menu.'
		),

		array(
			'tabName' => 'Contact',
			'content' => 'This is content for CONTACT. Please display me in the correct tab menu.'
		),
	);
	?>

	<!-- Change this loop using the given array above using php code -->
	<div class="container">

		<?php
		echo "A. Basic Tasks  1 <br>";

		function printDigitValue($data)
		{
			$list2 = str_split($data);
			$number = 10;
			for ($i = 1; $i < count($list2); $i++) {
				$number *= 10;
			}
			foreach ($list2 as $key => $value) {
				$number = $number / 10;
				$total = $value * $number;
				echo $total . '<br>';
			}
		}

		echo printDigitValue(932742131111);
		echo "<br>";


		echo "A. Basic Tasks 2 <br>";
		echo "<br>";
		#NUMBER 2
		for ($i = 1; $i <= 9; $i++) {
			for ($j = $i; $j <= 9; $j++)
				echo $j . ' ';
			echo "<br>";
		}

		echo "<br>";
		echo "A. Basic Tasks 3 <br>";
		echo "<br>";

		#NUMBER 3
		function Output($num)
		{
			$array = [];
			for ($i = 1; $i <= $num; $i++) {
				$array[] = (2 * $i) - 1;
			}

			$list = implode(', ', $array);
			print_r("[" . $list . "]");
		}

		json_encode(Output(7));
		echo "<br>";
		?>

		<?php
		echo "<br>";
		echo "A. Basic Tasks 4 Login ajax <br>";
		echo "<br>";
		?>











		<h1>Challenge 1</h1>
		<b>
			<blockquote>!! Instructions:</blockquote>
		</b>
		<ul>
			<li>Change the HTML using given array</li>
			<li>Use your logic and basic looping in php you can use for, foreach, while, or whatever you want to use </li>
			<li>Please DO NOT change the html, but the logic looping only</li>
			<li>The point is make the html dynamic base on the given array</li>
		</ul>

		<h3>Given array: </h3>

		<?php
		echo "<pre>";
		print_r($menu);
		echo "</pre>";
		?>

		<h2>Expected output: </h2>

		<nav class="mb-3">
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<? foreach ($menu as $key => $value) { ?>
					<a class="nav-item nav-link <?= $key == '0' ? 'active' : '' ?>" id="<?= 'nav-' . strtolower($value['tabName']) . '-table' ?>" data-toggle="tab" href="<?= '#nav-' . strtolower($value['tabName']) ?>" role="tab" aria-controls="nav-home" aria-selected="true"> <?= $value['tabName'] ?></a>
				<? } ?>
			</div>
		</nav>

		<div class="tab-content mb-5" id="nav-tabContent">
			<? foreach ($menu as $key => $value) { ?>
				<div class="tab-pane fade <?= $key == '0' ? "show active" : '' ?>" id="<?= "nav-" . strtolower($value['tabName'])  ?>" role="tabpanel" aria-labelledby="nav-home-tab"><?= $value['content'] ?></div>
			<? } ?>
		</div>
	</div>



	<div class="container">
		<h1>Challenge 2</h1>
		<b>
			<blockquote>!! Instructions:</blockquote>
		</b>
		<ul>
			<li>Change the HTML using given array</li>
			<li>Use your logic and basic looping in php you can use for, foreach, while, or whatever you want to use </li>
			<li>Please DO NOT change the html, but the logic looping only</li>
			<li>The point is make the html dynamic base on the given array</li>
		</ul>

		<h3>Given array: </h3>

		<?php
		$genre = ["Horor", "drama", "action", "comedy", "romance", "family", "fantasy", "Thriller", "mystery"];
		echo "<pre>";
		print_r($genre);
		echo "</pre>";
		?>

		<h2>Expected output: </h2>

		<section id="bathroom-special-single">


			<div class="row gallery ">
				<? foreach ($genre as $key => $value) { ?>
					<? if ($value === 'Horor' || $value === 'family') { ?>
						<div class="col-md-8 col-wrapper mb-5">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><?= ucfirst($value) ?></h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
							</div>
						</div>
					<? } else { ?>

						<div class="col-md-4 col-wrapper mb-5">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><?= ucfirst($value) ?></h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
							</div>
						</div>
					<? } ?>
				<? } ?>
			</div>
		</section>
	</div>
</body>

</html>