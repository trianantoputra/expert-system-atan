<!-- PREDIKSI NAIVE BAYES -->
				<div class="col-xs-12 col-sm-6">
					<div class="box">
						<div class="box-header">
							<div class="box-name">
								<i class="fa fa-circle"></i>
								<span>Kemungkinan Penyakit</span>
							</div>
							<div class="box-icons">
								<a class="collapse-link">
									<i class="fa fa-chevron-up"></i>
								</a>
								<a class="expand-link">
									<i class="fa fa-expand"></i>
								</a>
								<a class="close-link">
									<i class="fa fa-times"></i>
								</a>
							</div>
							<div class="no-move"></div>
						</div>
						<div class="box-content">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>Kemungkinan Penyakit</th>
										<th>Persentase Tertinggi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$count = 1;
										$persen = 100;
										if(max($data) == 0)
											echo
												"<tr>
													<td>".$count."</td>
													<td>Penyakit Tidak Diketahui</td>
													<td>0</td>
												</tr>";
										else
											foreach ($data as $key => $value) {
												if($value == max($data))
												{
													$value = number_format($value/array_sum($data)*$persen,2,'.','').'%';
													echo 
													"<tr>
														<td>".$count."</td>
														<td>".$key."</td>
														<td>".$value."</td>
													</tr>";
													$count += 1;
												}
											}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<form action="<?=base_url();?>" method="post">
						<button type="submit" class="btn btn-info">Kembali</button>
					</form>
				</div>
				<!-- END PENYAKIT DAN GEJALANYA -->
