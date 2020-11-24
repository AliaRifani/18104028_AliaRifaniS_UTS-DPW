<?php
$pemain = [
	["Cristiano Messi", "180", "Striker"],
	["Bejo Leonardo", "167", "Midfielder"],
	["Alfa Midi", "190", "Defender"]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UTS Web2</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style>
		body {
			background: #20B2AA
		}
	</style>
	<head>

		<body>
			<div class="container">
				<div class="card">
					<div class="card-header">
						<h2 class="text-center">---*Informasi Pemain Klub Sepak Bola*---</h2>
					</div>
					<div class="card-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Nama</th>
									<th scope="col">Tinggi</th>
									<th scope="col">Posisi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$nomor = 1;
								foreach ($pemain as $pmn){?>

								<tr>
									<th scope="row"><?php echo $nomor;?></th>
									<td><?= $pmn[0] ?></td>
									<td><?= $pmn[1] ?></td>
									<td><?= $pmn[2] ?></td>
								</tr>
								<?php $nomor++; } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</body>

		</html>