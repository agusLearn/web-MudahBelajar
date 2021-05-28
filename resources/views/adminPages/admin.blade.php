@extends('adminPages.templates.master')


@section('title-page', 'Halaman Admin')

@section('content')

<!-- OVERVIEW -->
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Weekly Overview</h3>
        <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-download"></i></span>
                    <p>
                        <span class="number">1,252</span>
                        <span class="title">Downloads</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                    <p>
                        <span class="number">203</span>
                        <span class="title">Sales</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-eye"></i></span>
                    <p>
                        <span class="number">274,678</span>
                        <span class="title">Visits</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-bar-chart"></i></span>
                    <p>
                        <span class="number">35%</span>
                        <span class="title">Conversions</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div id="headline-chart" class="ct-chart"></div>
            </div>
            <div class="col-md-3">
                <div class="weekly-summary text-right">
                    <span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
                    <span class="info-label">Total Sales</span>
                </div>
                <div class="weekly-summary text-right">
                    <span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
                    <span class="info-label">Monthly Income</span>
                </div>
                <div class="weekly-summary text-right">
                    <span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
                    <span class="info-label">Total Income</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OVERVIEW -->
<div class="row">
    <div class="col-md-6">
        <!-- RECENT PURCHASES -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Recent Purchases</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div class="panel-body no-padding">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Date &amp; Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#">763648</a></td>
                            <td>Steve</td>
                            <td>$122</td>
                            <td>Oct 21, 2016</td>
                            <td><span class="label label-success">COMPLETED</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">763649</a></td>
                            <td>Amber</td>
                            <td>$62</td>
                            <td>Oct 21, 2016</td>
                            <td><span class="label label-warning">PENDING</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">763650</a></td>
                            <td>Michael</td>
                            <td>$34</td>
                            <td>Oct 18, 2016</td>
                            <td><span class="label label-danger">FAILED</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">763651</a></td>
                            <td>Roger</td>
                            <td>$186</td>
                            <td>Oct 17, 2016</td>
                            <td><span class="label label-success">SUCCESS</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">763652</a></td>
                            <td>Smith</td>
                            <td>$362</td>
                            <td>Oct 16, 2016</td>
                            <td><span class="label label-success">SUCCESS</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                    <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
                </div>
            </div>
        </div>
        <!-- END RECENT PURCHASES -->
    </div>
    <div class="col-md-6">
        <!-- MULTI CHARTS -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Projection vs. Realization</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <div id="visits-trends-chart" class="ct-chart"></div>
            </div>
        </div>
        <!-- END MULTI CHARTS -->
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <!-- TODO LIST -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">To-Do List</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled todo-list">
                    <li>
                        <label class="control-inline fancy-checkbox">
                            <input type="checkbox"><span></span>
                        </label>
                        <p>
                            <span class="title">Restart Server</span>
                            <span class="short-description">Dynamically integrate client-centric technologies without cooperative resources.</span>
                            <span class="date">Oct 9, 2016</span>
                        </p>
                        <div class="controls">
                            <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
                        </div>
                    </li>
                    <li>
                        <label class="control-inline fancy-checkbox">
                            <input type="checkbox"><span></span>
                        </label>
                        <p>
                            <span class="title">Retest Upload Scenario</span>
                            <span class="short-description">Compellingly implement clicks-and-mortar relationships without highly efficient metrics.</span>
                            <span class="date">Oct 23, 2016</span>
                        </p>
                        <div class="controls">
                            <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
                        </div>
                    </li>
                    <li>
                        <label class="control-inline fancy-checkbox">
                            <input type="checkbox"><span></span>
                        </label>
                        <p>
                            <strong>Functional Spec Meeting</strong>
                            <span class="short-description">Monotonectally formulate client-focused core competencies after parallel web-readiness.</span>
                            <span class="date">Oct 11, 2016</span>
                        </p>
                        <div class="controls">
                            <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END TODO LIST -->
    </div>
    <div class="col-md-5">
        <!-- TIMELINE -->
        <div class="panel panel-scrolling">
            <div class="panel-heading">
                <h3 class="panel-title">Recent User Activity</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled activity-list">
                    <li>
                        <img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
                    </li>
                    <li>
                        <img src="assets/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>
                    </li>
                    <li>
                        <img src="assets/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>
                    </li>
                    <li>
                        <img src="assets/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>
                    </li>
                    <li>
                        <img src="assets/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>
                    </li>
                </ul>
                <button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>
            </div>
        </div>
        <!-- END TIMELINE -->
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <!-- TASKS -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">My Tasks</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled task-list">
                    <li>
                        <p>Updating Users Settings <span class="label-percent">23%</span></p>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
                                <span class="sr-only">23% Complete</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>Load &amp; Stress Test <span class="label-percent">80%</span></p>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>Data Duplication Check <span class="label-percent">100%</span></p>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">Success</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>Server Check <span class="label-percent">45%</span></p>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>Mobile App Development <span class="label-percent">10%</span></p>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                <span class="sr-only">10% Complete</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END TASKS -->
    </div>
    <div class="col-md-4">
        <!-- VISIT CHART -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Website Visits</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <div id="visits-chart" class="ct-chart"></div>
            </div>
        </div>
        <!-- END VISIT CHART -->
    </div>
    <div class="col-md-4">
        <!-- REALTIME CHART -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">System Load</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <div id="system-load" class="easy-pie-chart" data-percent="70">
                    <span class="percent">70</span>
                </div>
                <h4>CPU Load</h4>
                <ul class="list-unstyled list-justify">
                    <li>High: <span>95%</span></li>
                    <li>Average: <span>87%</span></li>
                    <li>Low: <span>20%</span></li>
                    <li>Threads: <span>996</span></li>
                    <li>Processes: <span>259</span></li>
                </ul>
            </div>
        </div>
        <!-- END REALTIME CHART -->
    </div>
</div>

@endsection



@push('chart-js')
<script>
		$(function() {
			var data, options;

			// headline charts
			data = {
				labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				series: [
					[23, 29, 24, 40, 25, 24, 35],
					[14, 25, 18, 34, 29, 38, 44],
				]
			};

			options = {
				height: 300,
				showArea: true,
				showLine: false,
				showPoint: false,
				fullWidth: true,
				axisX: {
					showGrid: false
				},
				lineSmooth: false,
			};

			new Chartist.Line('#headline-chart', data, options);


			// visits trend charts
			data = {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				series: [{
					name: 'series-real',
					data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
				}, {
					name: 'series-projection',
					data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
				}]
			};

			options = {
				fullWidth: true,
				lineSmooth: false,
				height: "270px",
				low: 0,
				high: 'auto',
				series: {
					'series-projection': {
						showArea: true,
						showPoint: false,
						showLine: false
					},
				},
				axisX: {
					showGrid: false,

				},
				axisY: {
					showGrid: false,
					onlyInteger: true,
					offset: 0,
				},
				chartPadding: {
					left: 20,
					right: 20
				}
			};

			new Chartist.Line('#visits-trends-chart', data, options);


			// visits chart
			data = {
				labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				series: [
					[6384, 6342, 5437, 2764, 3958, 5068, 7654]
				]
			};

			options = {
				height: 300,
				axisX: {
					showGrid: false
				},
			};

			new Chartist.Bar('#visits-chart', data, options);


			// real-time pie chart
			var sysLoad = $('#system-load').easyPieChart({
				size: 130,
				barColor: function(percent) {
					return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
				},
				trackColor: 'rgba(245, 245, 245, 0.8)',
				scaleColor: false,
				lineWidth: 5,
				lineCap: "square",
				animate: 800
			});

			var updateInterval = 3000; // in milliseconds

			setInterval(function() {
				var randomVal;
				randomVal = getRandomInt(0, 100);

				sysLoad.data('easyPieChart').update(randomVal);
				sysLoad.find('.percent').text(randomVal);
			}, updateInterval);

			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

		});
	</script>

@endpush