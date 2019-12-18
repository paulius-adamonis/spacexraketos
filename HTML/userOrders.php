<?php
	require_once("includes/header.php");
	$orders = [];
	for ($i=0; $i < 4; $i++) { 
		$order = new StdClass();
		$order->id = $i;
		$order->name = "Raketa #".$i;
		$order->sum = rand(100000, 1000000);
		$start = strtotime("1 December 2019");
		$end = strtotime("31 December 2019");
		$timestamp = mt_rand($start, $end);
		$order->date = date("Y-m-d", $timestamp);
		$orders[] = $order;
	}
?>
<head>
    <link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
		<!-- Puslapis -->
		<div class="container">
			<div class="h3">Jūsų užsakymai</div>
			<hr>
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Pavadinimas</th>
						<th>Suma</th>
						<th>Paleidimo data</th>
						<th>Veiksmai</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($orders as $order) {
							?>
							<tr>
								<td><?=$order->id?></td>
								<td><?=$order->name?></td>
								<td><?=$order->sum?></td>
								<th><?=$order->date?></th>
								<td><a href="launchStream.php?name=<?=urlencode($order->name)?>" class="btn btn-primary">Stebėti paleidimą</a>
									<a href="leaveReview.php?name=<?=urlencode($order->name)?>" class="btn btn-primary">Palikti atsiliepimą</a></td>
							</tr><?php
						}
					?>
				</tbody>
			</table>
		</div>

<?php
	require_once("includes/footer.php");
?>