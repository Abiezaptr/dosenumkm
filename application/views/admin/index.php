<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-8">														
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Analisa Laporan Harianmu</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-12">
							<a href="#" class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
											<span class="font-size-30 icon-Bulb1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
										</div>
										<div class="ml-15">											
											<h5 class="mb-0">UX Design</h5>
											<p class="text-fade font-size-12 mb-0">You Watched</p>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between mt-20">
										<div class="w-p70">
											<div class="progress progress-sm mb-0">
												<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
												</div>
											</div>
										</div>
										<div>
											<div>80%</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-12">
							<a href="#" class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
											<span class="font-size-30 icon-Pen-tool-vector"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="ml-15">											
											<h5 class="mb-0">UI Design</h5>
											<p class="text-fade font-size-12 mb-0">You Watched</p>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between mt-20">
										<div class="w-p70">
											<div class="progress progress-sm mb-0">
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
												</div>
											</div>
										</div>
										<div>
											<div>40%</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-12">
							<a href="#" class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
											<span class="font-size-30 icon-Chat-check"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="ml-15">											
											<h5 class="mb-0">Marketing</h5>
											<p class="text-fade font-size-12 mb-0">You Watched</p>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between mt-20">
										<div class="w-p70">
											<div class="progress progress-sm mb-0">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
												</div>
											</div>
										</div>
										<div>
											<div>30%</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-12 d-flex flex-wrap">
							<div class="col-6 col-md-3">
								<a class="box box-link-shadow text-center pull-up" href="javascript:void(0)">
									<div class="box-body py-25 bg-primary-light px-5">
										<p class="font-weight-600 text-primary">Courses</p>
									</div>
									<div class="box-body">
										<h1 class="countnm font-size-50 m-0">5</h1>
									</div>
								</a>
							</div>
							<div class="col-6 col-md-3">
								<a class="box box-link-shadow text-center pull-up" href="javascript:void(0)">
									<div class="box-body py-25 bg-primary-light px-5">
										<p class="font-weight-600 text-primary">Forum Discussion</p>
									</div>
									<div class="box-body">
										<h1 class="countnm font-size-50 m-0">25</h1>
									</div>
								</a>
							</div>
							<div class="col-6 col-md-3">
								<a class="box box-link-shadow text-center pull-up" href="javascript:void(0)">
									<div class="box-body py-25 bg-primary-light px-5">
										<p class="font-weight-600 text-primary">Completed</p>
									</div>
									<div class="box-body">
										<h1 class="countnm font-size-50 m-0">10</h1>
									</div>
								</a>
							</div>
							<div class="col-6 col-md-3">
								<a class="box box-link-shadow text-center pull-up" href="javascript:void(0)">
									<div class="box-body py-25 bg-primary-light px-5">
										<p class="font-weight-600 text-primary">Pending</p>
									</div>
									<div class="box-body">
										<h1 class="countnm font-size-50 m-0">3</h1>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">										
						<div class="box no-shadow mb-0 bg-transparent">
							<div class="box-header no-border px-0">
								<h4 class="box-title">Service Rating Distribusi</h4>	
							</div>
						</div>
						<div>
							<div class="box bl-5 border-light rounded pull-up">
								<div class="box-body">	
								<div id="rating-pie-chart" style="height:400px;"></div>
							<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
							<script>
    var chartDom = document.getElementById('rating-pie-chart');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        tooltip: {
            trigger: 'axis',
            formatter: '{a} <br/>{b} : {c}'
        },
        legend: {
            top: '5%',
            left: 'center'
        },
        color: ['#8a2be2', '#ff7f50'], // Warna ungu dan oranye
        xAxis: {
            type: 'category',
            data: [
                <?php foreach ($rating_data as $data) { ?>
                    '<?php echo $data['title']; ?>',
                <?php } ?>
            ],
            axisLabel: {
                interval: 0,
                rotate: 30 // Rotate labels if needed
            }
        },
        yAxis: {
            type: 'value'
        },
        series: [
            {
                name: 'Ratings',
                type: 'line',
                data: [
                    <?php foreach ($rating_data as $data) { ?>
                        <?php echo $data['rating']; ?>,
                    <?php } ?>
                ],
                itemStyle: {
                    color: '#8a2be2'
                },
                lineStyle: {
                    color: '#8a2be2'
                }
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
			</div> 
		</div>
	</div>
</section>
</div>