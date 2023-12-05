<?php
$data_kriteria = [
	["id" => "K1", "minmax" => "MAX", "bobot" => 0.05,   "type" => 4, "q" => 15, "p" => 40],
	["id" => "K2", "minmax" => "MAX", "bobot" => 0.1,  "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K3", "minmax" => "MAX", "bobot" => 0.1,   "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K4", "minmax" => "MAX", "bobot" => 0.05, "type" => 4, "q" => 15,  "p" => 40],
	["id" => "K5", "minmax" => "MAX", "bobot" => 0.05, "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K6", "minmax" => "MAX", "bobot" => 0.05,   "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K7", "minmax" => "MAX", "bobot" => 0.1,   "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K8", "minmax" => "MIN", "bobot" => 0.05, "type" => 4, "q" => 15,  "p" => 40],
	["id" => "K9", "minmax" => "MIN", "bobot" => 0.05, "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K10", "minmax" => "MAX", "bobot" => 0.1,   "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K11", "minmax" => "MIN", "bobot" => 0.1,   "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K12", "minmax" => "MIN", "bobot" => 0.05,   "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K13", "minmax" => "MAX", "bobot" => 0.1,   "type" => 4, "q" => 15,   "p" => 40],
	["id" => "K14", "minmax" => "MIN", "bobot" => 0.05,   "type" => 4, "q" => 15,   "p" => 40],
];
$data_sampel = [
	["id" => "A1", "K1" => 67, "K2" => 67, "K3" => 88, "K4" => 82,  "K5" => 71, "K6" => 67, "K7" => 80, "K8" => 80,  "K9" => 100, "K10" => 75, "K11" => 67, "K12" => 83, "K13" => 50,  "K14" => 50],
	["id" => "A2", "K1" => 92, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 64, "K6" => 67, "K7" => 70, "K8" => 80,  "K9" => 70, "K10" => 69, "K11" => 83, "K12" => 67, "K13" => 50,  "K14" => 50],
	["id" => "A3", "K1" => 83, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 71, "K6" => 83, "K7" => 80, "K8" => 100,  "K9" => 100, "K10" => 75, "K11" => 67, "K12" => 50, "K13" => 67,  "K14" => 50],
	["id" => "A4", "K1" => 67, "K2" => 67, "K3" => 88, "K4" => 82,  "K5" => 71, "K6" => 67, "K7" => 80, "K8" => 80,  "K9" => 100, "K10" => 75, "K11" => 67, "K12" => 83, "K13" => 50,  "K14" => 50],
	["id" => "A5", "K1" => 92, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 64, "K6" => 67, "K7" => 70, "K8" => 80,  "K9" => 70, "K10" => 69, "K11" => 83, "K12" => 67, "K13" => 50,  "K14" => 50],
	["id" => "A6", "K1" => 67, "K2" => 83, "K3" => 88, "K4" => 91,  "K5" => 86, "K6" => 83, "K7" => 80, "K8" => 80,  "K9" => 70, "K10" => 69, "K11" => 83, "K12" => 33, "K13" => 50,  "K14" => 67],
	["id" => "A7", "K1" => 67, "K2" => 83, "K3" => 88, "K4" => 68,  "K5" => 86, "K6" => 83, "K7" => 70, "K8" => 80,  "K9" => 70, "K10" => 69, "K11" => 83, "K12" => 33, "K13" => 50,  "K14" => 67],
	["id" => "A8", "K1" => 92, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 86, "K6" => 83, "K7" => 80, "K8" => 80,  "K9" => 70, "K10" => 69, "K11" => 83, "K12" => 33, "K13" => 50,  "K14" => 67],
	["id" => "A9", "K1" => 67, "K2" => 67, "K3" => 63, "K4" => 73,  "K5" => 79, "K6" => 100, "K7" => 100, "K8" => 100,  "K9" => 70, "K10" => 63, "K11" => 67, "K12" => 67, "K13" => 67,  "K14" => 58],
	["id" => "A10", "K1" => 83, "K2" => 67, "K3" => 63, "K4" => 82,  "K5" => 71, "K6" => 67, "K7" => 90, "K8" => 70,  "K9" => 100, "K10" => 88, "K11" => 83, "K12" => 83, "K13" => 67,  "K14" => 67],
	["id" => "A11", "K1" => 83, "K2" => 67, "K3" => 63, "K4" => 73,  "K5" => 71, "K6" => 83, "K7" => 80, "K8" => 100,  "K9" => 100, "K10" => 75, "K11" => 67, "K12" => 50, "K13" => 67,  "K14" => 75],
	["id" => "A12", "K1" => 75, "K2" => 67, "K3" => 50, "K4" => 82,  "K5" => 71, "K6" => 67, "K7" => 60, "K8" => 80,  "K9" => 100, "K10" => 75, "K11" => 83, "K12" => 83, "K13" => 67,  "K14" => 50],
	["id" => "A13", "K1" => 92, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 64, "K6" => 67, "K7" => 70, "K8" => 80,  "K9" => 70, "K10" => 69, "K11" => 83, "K12" => 67, "K13" => 50,  "K14" => 50],
	["id" => "A14", "K1" => 75, "K2" => 67, "K3" => 63, "K4" => 82,  "K5" => 79, "K6" => 100, "K7" => 70, "K8" => 100,  "K9" => 70, "K10" => 75, "K11" => 67, "K12" => 83, "K13" => 67,  "K14" => 67],
	["id" => "A15", "K1" => 83, "K2" => 67, "K3" => 88, "K4" => 73,  "K5" => 79, "K6" => 83, "K7" => 70, "K8" => 70,  "K9" => 80, "K10" => 75, "K11" => 67, "K12" => 83, "K13" => 67,  "K14" => 58],
	["id" => "A16", "K1" => 92, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 64, "K6" => 67, "K7" => 70, "K8" => 80,  "K9" => 70, "K10" => 69, "K11" => 83, "K12" => 67, "K13" => 50,  "K14" => 50],
	["id" => "A17", "K1" => 83, "K2" => 92, "K3" => 63, "K4" => 77,  "K5" => 71, "K6" => 67, "K7" => 70, "K8" => 70,  "K9" => 70, "K10" => 69, "K11" => 83, "K12" => 100, "K13" => 67,  "K14" => 75],
	["id" => "A18", "K1" => 75, "K2" => 100, "K3"=> 63, "K4" => 82,  "K5" => 79, "K6" => 100,"K7" => 100, "K8" => 100, "K9" => 100, "K10" => 100, "K11" => 100, "K12" => 100, "K13" => 67,  "K14" => 58],
	["id" => "A19", "K1" => 92, "K2" => 83, "K3" => 63, "K4" => 91,  "K5" => 86, "K6" => 67, "K7" => 80, "K8" => 80,  "K9" => 100, "K10" => 88, "K11" => 100, "K12" => 100, "K13" => 100,  "K14" => 75],
	["id" => "A20", "K1" => 92, "K2" => 92, "K3" => 88, "K4" => 86,  "K5" => 86, "K6" => 83, "K7" => 80, "K8" => 80,  "K9" => 80, "K10" => 81, "K11" => 67, "K12" => 50, "K13" => 83,  "K14" => 75],
	["id" => "A21", "K1" => 83, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 71, "K6" => 83, "K7" => 80, "K8" => 100,  "K9" => 100, "K10" => 75, "K11" => 67, "K12" => 50, "K13" => 67,  "K14" => 75],
	["id" => "A22", "K1" => 67, "K2" => 67, "K3" => 88, "K4" => 82,  "K5" => 71, "K6" => 67, "K7" => 80, "K8" => 80,  "K9" => 100, "K10" => 75, "K11" => 67, "K12" => 83, "K13" => 50,  "K14" => 50],
	["id" => "A23", "K1" => 75, "K2" => 100, "K3" => 63, "K4" => 82,  "K5" => 79, "K6" => 100, "K7" => 100, "K8" => 70,  "K9" => 70, "K10" => 75, "K11" => 67, "K12" => 67, "K13" => 67,  "K14" => 58],
	["id" => "A24", "K1" => 92, "K2" => 67, "K3" => 63, "K4" => 82,  "K5" => 86, "K6" => 67, "K7" => 80, "K8" => 80,  "K9" => 100, "K10" => 75, "K11" => 100, "K12" => 83, "K13" => 100,  "K14" => 83],
	["id" => "A25", "K1" => 75, "K2" => 100, "K3" => 63, "K4" => 82,  "K5" => 79, "K6" => 67, "K7" => 80, "K8" => 100,  "K9" => 70, "K10" => 88, "K11" => 83, "K12" => 67, "K13" => 67,  "K14" => 58],
	["id" => "A26", "K1" => 92, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 64, "K6" => 67, "K7" => 70, "K8" => 80,  "K9" => 70, "K10" => 88, "K11" => 83, "K12" => 67, "K13" => 50,  "K14" => 50],
	["id" => "A27", "K1" => 67, "K2" => 67, "K3" => 63, "K4" => 82,  "K5" => 71, "K6" => 75, "K7" => 80, "K8" => 80,  "K9" => 100, "K10" => 75, "K11" => 83, "K12" => 83, "K13" => 67,  "K14" => 75],
	["id" => "A28", "K1" => 75, "K2" => 75, "K3" => 75, "K4" => 73,  "K5" => 71, "K6" => 67, "K7" => 80, "K8" => 80,  "K9" => 70, "K10" => 75, "K11" => 83, "K12" => 83, "K13" => 67,  "K14" => 50],
	["id" => "A29", "K1" => 83, "K2" => 67, "K3" => 50, "K4" => 91,  "K5" => 71, "K6" => 100, "K7" => 90, "K8" => 100,  "K9" => 100, "K10" => 88, "K11" => 83, "K12" => 83, "K13" => 83,  "K14" => 83],
	["id" => "A30", "K1" => 67, "K2" => 67, "K3" => 63, "K4" => 73,  "K5" => 71, "K6" => 92, "K7" => 90, "K8" => 70,  "K9" => 90, "K10" => 88, "K11" => 83, "K12" => 83, "K13" => 67,  "K14" => 67],
	["id" => "A31", "K1" => 83, "K2" => 67, "K3" => 63, "K4" => 91,  "K5" => 71, "K6" => 83, "K7" => 80, "K8" => 100,  "K9" => 100, "K10" => 75, "K11" => 67, "K12" => 50, "K13" => 67,  "K14" => 75],
];
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DebugLagi</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/jquery-1.11.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<style>
		.table td,
		.table th {
			min-width: 100px;
		}
	</style>
</head>

<body style="padding:40px">
	<h1 class="text-left">Algoritma Promethee</h1>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body">
					Diketahui (Terdapat beberapa Kriteria dan Data Sampel seperti tabel dibawah ini)
				</div>
				<div class="panel-footer">
					<div class="table-responsive">
						<table class="table table-bordered">
							KRITERIA
							<thead class="text-center">
								<tr>
									<th class="text-center">Id</th>
									<th class="">MinMax</th>
									<th class="">Bobot</th>
									<th class="">Type</th>
									<th class="">q</th>
									<th class="">p</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<?php
									for ($i = 0; $i < count($data_kriteria); $i++) {
										echo ("<tr><td class='text-center'>" . $data_kriteria[$i]['id'] . "</td>");
										echo ("<td>" . $data_kriteria[$i]['minmax'] . "</td>");
										echo ("<td>" . $data_kriteria[$i]['bobot'] . "</td>");
										echo ("<td>" . $data_kriteria[$i]['type'] . "</td>");
										echo ("<td>" . $data_kriteria[$i]['q'] . "</td>");
										echo ("<td>" . $data_kriteria[$i]['p'] . "</td></tr>");
									}
									?>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered">
							DATA SAMPEL
							<thead class="text-center">
								<tr>
									<th rowspan="2" valign="middle" class="text-center">
										<p>Id Alternatif</p>
									</th>
									<th colspan="6" class="text-center">Kriteria</th>
								</tr>
								<tr>
									<?php
									for ($i = 0; $i < count($data_kriteria); $i++) {
										echo ("<th>" . $data_kriteria[$i]['id'] . "</th>");
									}
									?>
								</tr>
							</thead>
							<tbody>
								<?php
								for ($i = 0; $i < count($data_sampel); $i++) {
									echo ("<tr>");
									echo ("<td class='text-center'>" . $data_sampel[$i]["id"] . "</td>");
									for ($j = 0; $j < count($data_kriteria); $j++) {
										echo ("<td>" . $data_sampel[$i][$data_kriteria[$j]['id']] . "</td>");
									}
									echo ("</tr>");
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body">
					Pertanyaan?
				</div>
				<div class="panel-footer">
					Bagaimana mengevaluasi alternatif dengan kriteria yang diberikan untuk menentukan membuat peringkat alternatif
				</div>
			</div>
		</div>
		<div class="col-md-12 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="" method="post">
						Penyelesaiannya <button name="submit" type="submit">Klik Proses</button>
					</form>
				</div>
				<?php if (isset($_POST["submit"])) {
				?>
					<div class="panel-footer">
						<b>Penentuan Nilai Deviasi berdasarkan Perbandingan Berpasangan (d)</b>
						<div class="table-responsive table--no-card m-b-30">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th rowspan="3" style="vertical-align : middle;">Alternatif</th>
										<th colspan="<?php echo (count($data_kriteria) * 2) ?>" style="text-align : center;">Nilai Kriteria</th>
									</tr>
									<tr>
										<?php foreach ($data_kriteria as $i => $d) { ?>
											<th colspan="2" class="text-center"><?php echo ($d['id']) ?></th>
										<?php } ?>
									</tr>
									<tr>
										<?php foreach ($data_kriteria as $i => $d) { ?>
											<th>P</th>
											<th>IP</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 0;
									$arr = array(count($data_sampel));
									foreach ($data_sampel as $da) {
										$j = 0;
										$arr[$i] = array(count($data_sampel));
										foreach ($data_sampel as $db) {
											if ($da['id'] !== $db['id']) {
												$sum_IP = 0.0;
									?>
												<tr>
													<td><?php echo ("(" . $da['id'] . "," . $db['id'] . ")") ?></td>

													<?php
													$q = 2;
													foreach ($data_kriteria as $dk) {
														$IP = 0.0; //Index Preferensi
														$P = 0.0; //Preferensi

														$n1 = $da[$dk['id']];
														$n2 = $db[$dk['id']];
														$d = abs(floatval($n1) - floatval($n2));
														$p = floatval($dk['p']);
														$q = floatval($dk['q']);
														$bobot = floatval($dk['bobot']);
														if ($dk['minmax'] == "MIN" && $n1 > $n2) {
															$P = 0;
														} elseif ($dk['minmax'] == "MAX" && $n1 < $n2) {
															$P = 0;
														} else {
															// Type 1
															if ($dk['type'] == 1) {
																if ($d == 0) {
																	$P = 0;
																}
																if ($d < 0 || $d > 0) {
																	$P = 1;
																}
															};
															// Type 2
															if ($dk['type'] == 2) {
																if (-$p <= $d && $d < $p) {
																	$P = $d / $p;
																}
																if ($d < -$q || $d > $q) {
																	$P = 1;
																}
															};
															// Type 3
															if ($dk['type'] == 3) {
																if (-$p <= $d && $d <= $p) {
																	($d / $p) == 0 ? $P = 0 : $P = $d / $p;
																}
																if ($d < -$p || $d > $p) {
																	$P = 1;
																}
															};

															// Type 4
															if ($dk['type'] == 4) {

																if ($d <= $q) {
																	$P = 0;
																}
																if ($q < $d && $d <= $p) {
																	$P = 0.5;
																}
																if ($p < $d) {
																	$P = 1;
																}
															};
															// Type 5
															if ($dk['type'] == 5) {
																if ($d <= $q) {
																	$P = 0;
																}
																if ($q < $d && $d <= $p) {
																	($p - $q) == 0 ? $P = 0 : $P = ($d - $q) / ($p - $q);
																}
																if ($p < $d) {
																	$P = 1;
																}
															}
														}
														$IP += $P * $bobot;
														$sum_IP += $IP;
													?>
														<td>
															<?php echo ($P) ?>
														</td>
														<td>
															<?php echo ($IP) ?>
														</td>
													<?php
													}
													$arr[$i][$j] = $sum_IP;
													?>

												</tr>
									<?php } else {
												$arr[$i][$j] = 0;
											}
											$j++;
										}
										$i++;
									} ?>
								</tbody>

							</table>
						</div>
						<br>
						<b>Mencari Nilai Leaving Flow dan Entering Flow</b>
						<div class="table-responsive table--no-card m-b-30">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th style="vertical-align : middle;"></th>
										<?php foreach ($data_sampel as $i => $d) { ?>
											<th style="text-align : left;"><?php echo ($d['id']) ?></th>
										<?php } ?>
										<th style="vertical-align : middle;">Jumlah Baris</th>
										<th style="vertical-align : middle;">leaving flow</th>
									</tr>
								</thead>
								<tbody>

									<?php

									$leaving_flow = array();
									$entering_flow = array();
									$sum_row = array();
									$sum_column = array();
									for ($n = 0; $n < count($arr); $n++) {
										$sum_a = 0;
										$sum_b = 0;
									?>
										<tr>
											<td><?php echo $data_sampel[$n]['id'] ?></td>
											<?php
											for ($m = 0; $m < count($arr[$n]); $m++) {
											?>
												<td><?php echo $arr[$n][$m]; ?></td>
											<?php
												$sum_a += $arr[$n][$m];
												$sum_b += $arr[$m][$n];
											}
											$sum_row[$n] = $sum_a;
											$sum_column[$n] = $sum_b;
											$leaving_flow[$n] = (1 / (count($data_sampel) - 1)) * $sum_a;
											$entering_flow[$n] = (1 / (count($data_sampel) - 1)) * $sum_b;
											?>
											<td style="font-weight: bold"><?php echo  $sum_row[$n]; ?></td>
											<td style="font-weight: bold"><?php echo $leaving_flow[$n]; ?></td>
										</tr>

									<?php
									}
									?><tr>
										<td style="font-weight: bold">Jumlah Kolom</td>
										<?php
										for ($g = 0; $g < count($sum_column); $g++) { ?>
											<td style="font-weight: bold"><?php echo $sum_column[$g]; ?></td>
										<?php }
										?><td></td>
										<td></td>
									</tr>
									<tr>
										<td style="font-weight: bold">Entering Flow</td><?php
																						for ($g = 0; $g < count($entering_flow); $g++) { ?>
											<td style="font-weight: bold"><?php echo $entering_flow[$g]; ?></td>
										<?php }
										?><td></td>
										<td></td>
									</tr>
								</tbody>

							</table>
						</div>
						<br>
						<b>Mencari Netflow</b>
						<div class="table-responsive table--no-card m-b-30">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th style="vertical-align : middle;">Alternatif</th>
										<th style="vertical-align : middle;">NetFlow</th>
										<th style="vertical-align : middle;">Peringkat</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$net_flow = null;
									for ($h = 0; $h < count($leaving_flow); $h++) {
										$n = $leaving_flow[$h] - $entering_flow[$h];
										$net_flow[] = array("id" => $data_sampel[$h]["id"], "netflow" => $n);
									}
									array_multisort(array_map(function ($element) {
										return $element['netflow'];
									}, $net_flow), SORT_DESC, $net_flow);
									foreach ($net_flow as $i => $net) {
									?>
										<tr>
											<td><?php echo ($net['id']) ?></td>
											<td><?php echo ($net['netflow']) ?></td>
											<td><?php echo ($i + 1) ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>

							</table>
						</div>
						<?php
						$terbesar = array_reduce($net_flow, function ($a, $b) {
							return @$a['netflow'] > $b['netflow'] ? $a : $b;
						});

						echo ("Berdasarkan nilai terbesar maka <b> Alternatif " . $terbesar['id'] . "</b> merupakan alternatif terpilih"); ?>

					</div>
			</div>
		</div>
	<?php }
	?>
	</div>
</body>

</html>