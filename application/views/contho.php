
	<!-- ////////// Content ////////// -->
	<div id="content">

		<!-- ////////// Page Title & Breadcrumbs //////////-->
		<div class="row">
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h4>Dashboard</h4>
				<p class="text-muted">Welcome to Dashboard</p>
			</div> <!-- /col -->
		</div> <!-- /row -->

		<div class="row">
			
			<!-- ////////// Sale Chart //////////-->
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="card dashboard-widget sale-widget">
					<div class="card-heading">
						<div class="top-heading">
							<h5>Sales</h5>
							<div class="tools">
								<button type="button" class="btn-tools btn-hide-card">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</button> <!-- /btn-hide -->
								<button type="button" class="btn-tools btn-refresh-card">
									<i class="fa fa-refresh" aria-hidden="true"></i>
								</button> <!-- /btn-refresh -->
								<button type="button" class="btn-tools btn-close-card">
									<i class="fa fa-times" aria-hidden="true"></i>
								</button> <!-- /btn-close -->
							</div> <!-- /tools -->
						</div> <!-- /top-heading -->
						<ul class="list-unstyled chart-options">
							<li>               
								<div class="option-1"><span class="status"></span>Last Month</div>
							</li> <!-- /li -->
							<li>
								<div class="option-2"><span class="status"></span>Last Year</div>
							</li> <!-- /li -->                
							<li>
								<div class="option-3"><span class="status"></span>Total</div>
							</li> <!-- /li -->
						</ul> <!-- /chart-options -->
					</div> <!-- /card-heading -->
					<div class="card-body p-0">
						<canvas id="sale_chart">
						</canvas> <!-- /sale_chart -->
					</div> <!-- /card-body -->
				</div> <!-- /card -->
			</div> <!-- /col -->
			
		</div> <!-- /row -->
		
		<div class="row">
			
			<!-- ////////// Earnings Widget ////////// -->
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-4">
				<div class="card dashboard-widget earnings-widget">
					<div class="card-heading">
						<div class="top-heading">
							<h5>Earnings</h5>
							<div class="tools">
								<button type="button" class="btn-tools btn-hide-card">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</button> <!-- /btn-hide -->
								<button type="button" class="btn-tools btn-refresh-card">
									<i class="fa fa-refresh" aria-hidden="true"></i>
								</button> <!-- /btn-refresh -->
								<button type="button" class="btn-tools btn-close-card">
									<i class="fa fa-times" aria-hidden="true"></i>
								</button> <!-- /btn-close -->
							</div> <!-- /tools -->
						</div> <!-- /top-heading -->   
					</div> <!-- /card-heading -->
					<div class="card-body">
						<canvas id="earnings_chart">
						</canvas> <!-- /earnings_chart -->
					</div> <!-- /card-body -->
					<div class="card-footer row">
						<div class="item col-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
							<p><span>$</span>50,000</p>
							<h6>Target</h6>
						</div> <!-- /item -->
						<div class="item col-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
							<p><span>$</span>2130</p>
							<h6>Today Earnings</h6>
						</div> <!-- /item -->                  
						<div class="item col-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
							<p><span>$</span>17320</p>
							<h6>Monthly Earnings</h6>
						</div> <!-- /item -->                  
					</div> <!-- /card-footer -->
				</div> <!-- /card -->
			</div> <!-- /col -->
			
			<!-- ////////// Visits Widget ////////// -->
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-4">
				<div class="card dashboard-widget visits-widget">
					<div class="card-heading">
						<div class="top-heading">
							<h5>Visits</h5>
							<div class="tools">
								<button type="button" class="btn-tools btn-hide-card">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</button> <!-- /btn-hide -->
								<button type="button" class="btn-tools btn-refresh-card">
									<i class="fa fa-refresh" aria-hidden="true"></i>
								</button> <!-- /btn-refresh -->
								<button type="button" class="btn-tools btn-close-card">
									<i class="fa fa-times" aria-hidden="true"></i>
								</button> <!-- /btn-close -->
							</div> <!-- /tools -->
						</div> <!-- /top-heading -->   
					</div> <!-- /card-heading -->
					<div class="card-body">
						<div class="chart-wrapper">       
							<canvas id="visitors_chart"></canvas>
						</div> <!-- /chart-wrapper -->
					</div> <!-- /card-body -->
					<div class="card-footer row">
						<div class="col-xs col-sm-9 col-md-9 col-lg-6 col-xl-8">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolore dignissimos, non iste.</p>
						</div> <!-- /col -->                  
						<div class="item col-xs col-sm-3 col-md-3 col-lg-6 col-xl-4">
							<span><i class="fa fa-caret-down" aria-hidden="true"></i> 15%</span>
						</div> <!-- /item -->                  
					</div> <!-- /card-footer -->
				</div> <!-- /card -->
			</div> <!-- /col -->         

			<!-- ////////// Server Usage Widget ////////// -->
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-4">
				<div class="card dashboard-widget server-widget">
					<div class="card-heading">
						<div class="top-heading">
							<h5>Server Usage</h5>
							<div class="tools">
								<button type="button" class="btn-tools btn-hide-card">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</button> <!-- /btn-hide -->
								<button type="button" class="btn-tools btn-refresh-card">
									<i class="fa fa-refresh" aria-hidden="true"></i>
								</button> <!-- /btn-refresh -->
								<button type="button" class="btn-tools btn-close-card">
									<i class="fa fa-times" aria-hidden="true"></i>
								</button> <!-- /btn-close -->
							</div> <!-- /tools -->
						</div> <!-- /top-heading -->   
					</div> <!-- /card-heading -->
					<div class="card-body">
						<h5>Cpu Usage</h5>
						<div class="progress">
							<div class="progress-bar progress-bar-primary progress-bar-md" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">87%</div>
						</div> <!-- /progress -->                  
						<h5>Memory Usage</h5>
						<div class="progress">
							<div class="progress-bar progress-bar-primary progress-bar-md" role="progressbar" style="width: 79%;" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">79%</div>
						</div> <!-- /progress -->                  
						<h5>Gpu Usage</h5>
						<div class="progress">
							<div class="progress-bar progress-bar-primary progress-bar-md" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
						</div> <!-- /progress -->                  
						<h5>Free Space</h5>
						<div class="progress">
							<div class="progress-bar progress-bar-primary progress-bar-md" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
						</div> <!-- /progress -->
					</div> <!-- /card-body -->
				</div> <!-- /card -->
			</div> <!-- /col -->

		</div> <!-- /row -->

		<div class="row">   

			<!-- ////////// Team DataTable //////////-->
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-8">        
				<div class="card dashboard-widget">
					<div class="card-heading">
						<div class="top-heading">
							<h5>Team Members</h5>
							<div class="tools">
								<button type="button" class="btn-tools btn-hide-card">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</button> <!-- /btn-hide -->
								<button type="button" class="btn-tools btn-refresh-card">
									<i class="fa fa-refresh" aria-hidden="true"></i>
								</button> <!-- /btn-refresh -->
								<button type="button" class="btn-tools btn-close-card">
									<i class="fa fa-times" aria-hidden="true"></i>
								</button> <!-- /btn-close -->
							</div> <!-- /tools -->
						</div> <!-- /top-heading -->   
					</div> <!-- /card-heading -->
					<div class="card-body">
					<table id="dashboard-table" class="team-table table table-responsive table-striped"> 
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Salary</th>
							</tr> <!-- /tr -->
						</thead> <!-- /thead -->
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>$320,800</td>
							</tr> <!-- /tr -->
							<tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>$170,750</td>
							</tr> <!-- /tr -->
							<tr>
								<td>Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>$86,000</td>
							</tr> <!-- /tr -->
							<tr>
								<td>Cedric Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>$433,060</td>
							</tr> <!-- /tr -->
							<tr>
								<td>Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>$162,700</td>
							</tr> <!-- /tr -->
						</tbody> <!-- /tbody -->
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Salary</th>
							</tr> <!-- /tr -->
						</tfoot> <!-- /tfoot -->
					</table> <!-- /table-responsive -->
					</div> <!-- /card-body -->
				</div> <!-- /card -->
			</div> <!-- /col -->  

			<!-- ////////// Location Widget //////////-->
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-4">
				<div class="card dashboard-widget sale-widget">
					<div class="card-heading">
						<div class="top-heading">
							<h5>Location</h5>
							<div class="tools">
								<button type="button" class="btn-tools btn-hide-card">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</button> <!-- /btn-hide -->
								<button type="button" class="btn-tools btn-refresh-card">
									<i class="fa fa-refresh" aria-hidden="true"></i>
								</button> <!-- /btn-refresh -->
								<button type="button" class="btn-tools btn-close-card">
									<i class="fa fa-times" aria-hidden="true"></i>
								</button> <!-- /btn-close -->
							</div> <!-- /tools -->
						</div> <!-- /top-heading -->
					</div> <!-- /card-heading -->
					<div class="card-body">
						<div id="world-vmap" class="map-widget"></div>
					</div> <!-- /card-body -->
				</div> <!-- /card -->   
			</div> <!-- /col -->

		</div> <!-- /row --> 

	</div> <!-- /content -->