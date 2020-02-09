<!-- PREDIKSI NAIVE BAYES -->
				<div class="col-xs-12 col-sm-6">
					<div class="box">
						<div class="box-header">
							<div class="box-name">
								<i class="fa fa-circle"></i>
								<span>List Penyakit Dan Peluang Penyakit</span>
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
										<th>Penyakit</th>
										<th>Probabilitas</th>
										<th>Persentase</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$count = 1;
										$persen = 100;
										if(max($data) == 0)
										{
											foreach ($data as $key => $value) {
												$persentase = "0%";
												echo 
												"<tr>
													<td>".$count."</td>
													<td>".$key."</td>
													<td>".$value."</td>
													<td>".$persentase."</td>
												</tr>";
												$count += 1;
											}
										}	
										else
										{
											foreach ($data as $key => $value) {
												$persentase = number_format($value/array_sum($data)*$persen,2,'.','').'%';
												echo 
												"<tr>
													<td>".$count."</td>
													<td>".$key."</td>
													<td>".$value."</td>
													<td>".$persentase."</td>
												</tr>";
												$count += 1;
											}
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- END PENYAKIT DAN GEJALANYA -->