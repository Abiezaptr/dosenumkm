 <div class="content-wrapper">
	<div class="container-full">
	<!-- Filter Section -->
	<section class="content">
			<div class="row mb-4">
				<div class="col-md-12">
				<div class="box bt-3 border-secondary">
				  <div class="box-header">
				  <h4 class="box-title">HI <strong>  <?= $this->session->userdata('nama') ?></strong>, process data filtering to monitor the summary for a specific period.</h4>
				  </div>
				  <div class="box-body">
				  	<form method="GET" action="<?php echo base_url('admin/dashboard'); ?>" class="form-inline">
						<div class="form-group mr-4">
							<label for="serviceOptions" class="mr-3">Services:</label>
							<select class="form-control" id="serviceOptions" name="category_id" onchange="this.form.submit()">
								<option value="all" <?php echo (isset($_GET['category_id']) && $_GET['category_id'] == 'all') ? 'selected' : ''; ?>>All Service</option>
								<option value="1" <?php echo (isset($_GET['category_id']) && $_GET['category_id'] == '1') ? 'selected' : ''; ?>>Consulting</option>
								<option value="2" <?php echo (isset($_GET['category_id']) && $_GET['category_id'] == '2') ? 'selected' : ''; ?>>Agency</option>
								<option value="3" <?php echo (isset($_GET['category_id']) && $_GET['category_id'] == '3') ? 'selected' : ''; ?>>Customer Registration</option>
							</select>
						</div>
						<div class="form-group mr-4">
							<label for="statusFilter" class="mr-3">Status:</label>
							<select class="form-control" id="statusFilter" name="status" onchange="this.form.submit()">
								<option value="all" <?php echo (isset($_GET['status']) && $_GET['status'] == 'all') ? 'selected' : ''; ?>>All Status</option>
								<option value="1" <?php echo (isset($_GET['status']) && $_GET['status'] == '1') ? 'selected' : ''; ?>>Active</option>
								<option value="0" <?php echo (isset($_GET['status']) && $_GET['status'] == '0') ? 'selected' : ''; ?>>Inactive</option>
							</select>
						</div>
						<div class="form-group mr-4">
							<label for="dateFrom" class="mr-3">Date From:</label>
							<input type="date" class="form-control" id="dateFrom" name="date_from" onchange="this.form.submit()" value="<?php echo isset($_GET['date_from']) ? $_GET['date_from'] : ''; ?>" placeholder="Date From">
						</div>
						<div class="form-group mr-4">
							<label for="dateTo" class="mr-3">Date To:</label>
							<input type="date" class="form-control" id="dateTo" name="date_to" onchange="this.form.submit()" value="<?php echo isset($_GET['date_to']) ? $_GET['date_to'] : ''; ?>" placeholder="Date To">
						</div>
					</form>
				  </div>
				</div>
			  </div>
			</div>
			<!-- <div class="box">
				<div class="box-body py-0">
					<div class="table-responsive">
						<br>
					<h4 class="box-title">Order Transaction History</h4>							
							<div class="box-controls pull-right d-md-flex d-none">
							  <a href="#">View All</a>
							</div>
						<table class="table no-border mb-0">
							<tbody>
								<tr>
									<td>
										<div class="bg-danger h-50 w-50 l-h-50 rounded text-center">
											<p class="mb-0 font-size-20 font-weight-600">A1</p>
										</div>
									</td>
									<td class="font-weight-600">Biology Course</td>
									<td class="text-fade">StarterReplacement.pdf</td>
									<td class="font-weight-500"><span class="badge badge-sm badge-dot badge-warning mr-10"></span>Only view</td>
									<td class="text-fade">78 members</td>
									<td class="font-weight-600">47 MB</td>
								</tr>
								<tr>
									<td>
										<div class="bg-info h-50 w-50 l-h-50 rounded text-center">
											<p class="mb-0 font-size-20 font-weight-600">B1</p>
										</div>
									</td>
									<td class="font-weight-600">Contemporary Art</td>
									<td class="text-fade">Loremipsum.doc</td>
									<td class="font-weight-500 text-warning"><span class="badge badge-sm badge-dot badge-warning mr-10"></span>Edit available</td>
									<td class="text-fade">78 members</td>
									<td class="font-weight-600">78 MB</td>
								</tr>
								<tr>
									<td>
										<div class="bg-primary h-50 w-50 l-h-50 rounded text-center">
											<p class="mb-0 font-size-20 font-weight-600">C1</p>
										</div>
									</td>
									<td class="font-weight-600">Programming Language</td>
									<td class="text-fade">phpcore.mp3</td>
									<td class="font-weight-500"><span class="badge badge-sm badge-dot badge-primary mr-10"></span>Only view</td>
									<td class="text-fade">48 members</td>
									<td class="font-weight-600">12 MB</td>
								</tr>
								<tr>
									<td>
										<div class="bg-success h-50 w-50 l-h-50 rounded text-center">
											<p class="mb-0 font-size-20 font-weight-600">A2</p>
										</div>
									</td>
									<td class="font-weight-600">Geometry Course</td>
									<td class="text-fade">dummyabz.pdf</td>
									<td class="font-weight-500"><span class="badge badge-sm badge-dot badge-primary mr-10"></span>Only view</td>
									<td class="text-fade">24 members</td>
									<td class="font-weight-600">18 MB</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>	 -->

		<!-- eChart -->
		<div class="row">
			<div class="col-xl-6 col-12">
				<div class="box">
					<div class="box-body analytics-info">
						<div class="d-flex justify-content-between align-items-center">
							<h4 class="box-title">Services Rating Distribution</h4>
							<button id="download-chart" class="btn btn-info">Download as JPG</button>
						</div>
						<div id="rating-pie-chart" style="height:400px;"></div>
						<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
						<script>
							var chartDom = document.getElementById('rating-pie-chart');
							var myChart = echarts.init(chartDom);
							var option;

							option = {
								tooltip: {
									trigger: 'item',
									formatter: '{a} <br/>{b} : {c} ({d}%)'
								},
								legend: {
									top: '5%',
									left: 'center'
								},
								series: [
									{
										name: 'Ratings',
										type: 'pie',
										radius: ['40%', '70%'],
										avoidLabelOverlap: false,
										itemStyle: {
											borderRadius: 10,
											borderColor: '#fff',
											borderWidth: 2
										},
										label: {
											show: false,
											position: 'center'
										},
										emphasis: {
											label: {
												show: true,
												fontSize: '18',
												fontWeight: 'bold'
											}
										},
										labelLine: {
											show: false
										},
										data: [
											<?php foreach ($rating_data as $data) { ?>
												{ value: <?php echo $data['rating']; ?>, name: '<?php echo $data['title']; ?> - <?php echo number_format($data['rating'], 1); ?>' },
											<?php } ?>
										]
									}
								]
							};

							option && myChart.setOption(option);

							document.getElementById('download-chart').addEventListener('click', function () {
								var url = myChart.getDataURL({
									type: 'jpeg',
									pixelRatio: 2,
									backgroundColor: '#fff'
								});
								var link = document.createElement('a');
								link.href = url;
								link.download = 'rating-distribution.jpg';
								link.click();
							});
						</script>
					</div>
				</div>
			</div>
			
			<div class="col-xl-6 col-12">
				<div class="box">
					<div class="box-body analytics-info">
						<div class="d-flex justify-content-between align-items-center">
							<h4 class="box-title">Retention Customer Distribution</h4>
							<button id="download-chart" class="btn btn-info">Download as JPG</button>
						</div>
						<div id="rating-pie-chart" style="height:400px;"></div>
						<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
						<script>
							var chartDom = document.getElementById('rating-pie-chart2');
							var myChart = echarts.init(chartDom);
							var option;

							option = {
								tooltip: {
									trigger: 'item',
									formatter: '{a} <br/>{b} : {c} ({d}%)'
								},
								legend: {
									top: '5%',
									left: 'center'
								},
								series: [
									{
										name: 'Ratings',
										type: 'pie',
										radius: ['40%', '70%'],
										avoidLabelOverlap: false,
										itemStyle: {
											borderRadius: 10,
											borderColor: '#fff',
											borderWidth: 2
										},
										label: {
											show: false,
											position: 'center'
										},
										emphasis: {
											label: {
												show: true,
												fontSize: '18',
												fontWeight: 'bold'
											}
										},
										labelLine: {
											show: false
										},
										data: [
											<?php foreach ($rating_data as $data) { ?>
												{ value: <?php echo $data['rating']; ?>, name: '<?php echo $data['title']; ?> - <?php echo number_format($data['rating'], 1); ?>' },
											<?php } ?>
										]
									}
								]
							};

							option && myChart.setOption(option);

							document.getElementById('download-chart').addEventListener('click', function () {
								var url = myChart.getDataURL({
									type: 'jpeg',
									pixelRatio: 2,
									backgroundColor: '#fff'
								});
								var link = document.createElement('a');
								link.href = url;
								link.download = 'rating-distribution.jpg';
								link.click();
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>	    
</div>
