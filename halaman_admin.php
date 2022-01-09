<?php
include '../spk-edit/configdb.php';
include 'header.php';

?>

<body>
	<?php
	include 'navbarmenu.php';
	?>
	<div class="container">

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-primary">
						<!-- Default panel contents -->
						<div class="panel-heading">Data Kriteria</div>
						<?php
						$kriteria = $mysqli->query("select * from kriteria");
						if (!$kriteria) {
							echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
							exit();
						}
						$i = 0;
						?>
						<div class="panel-body table-responsive">
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>Kriteria</th>
										<th>Kepentingan</th>
										<th>Cost / Benefit</th>
										<th>Opsi</th>
									</tr>
								</thead>



								<tbody>
									<?php
									$i = 1;
									while ($row = $kriteria->fetch_assoc()) {
										echo '<tr>';
										echo '<td>' . $i++ . '</td>';
										echo '<td>' . ucwords($row["kriteria"]) . '</td>';
										echo '<td>' . $row["kepentingan"] . '</td>';
										echo '<td class="text-uppercase">' . $row["cost_benefit"] . '</td>';
										echo '<td><!--a href="#"><i class="fa fa-search"></i></a-->';
									?>
										<?php
										if (isset($_SESSION['username'])) {
											if ($_SESSION['level'] == 'admin') { ?>
												<a href="edit-kriteria.php?id=<?php echo $row["id_kriteria"]; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
										<?php
											}
										} ?>
										<!--a href="#"><i class="fa fa-times"></i></a></td-->
									<?php
										echo '</tr>';
									}
									?>
								</tbody>
							</table>
						</div>
						<div>
						</div>
						<div class="panel-footer text-primary"><?php echo $_SESSION['by']; ?><div class="pull-right"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /page wrapper -->
	</div> <!-- /container -->
</body>

<?php
include 'footer.php'
?>