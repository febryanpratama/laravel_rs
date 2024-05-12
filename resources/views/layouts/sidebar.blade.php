<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		{{-- <div class="help-bt">
			<a href="tel:108" class="d-flex align-items-center">
				<div class="bg-danger rounded10 h-50 w-50 l-h-50 text-center me-15">
					<i data-feather="mic"></i>
				</div>
				<h4 class="mb-0">Emergency<br>help</h4>
			</a>
		</div> --}}
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				<li>
					<a href="{{ url('home') }}">
					  <i data-feather="monitor"></i>
					  <span>Dashboard</span>
					</a>
				</li>		
				<li>
					<a href="{{ url('dokter') }}">
					  <i data-feather="users"></i>
					  <span>Dokter</span>
					</a>
				</li>	
				<li>
					<a href="{{ url('tiket') }}">
					  <i data-feather="monitor"></i>
					  <span>Tiket</span>
					</a>
				</li>	
				<li>
					<a href="{{ url('akun') }}">
					  <i data-feather="users"></i>
					  <span>Akun</span>
					</a>
				</li>	     
				<li>
					<a href="{{ url('logout') }}">
					  <i data-feather="log-out"></i>
					  <span>Logout</span>
					</a>
				</li>	     
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-17.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">Make an Appointments</h4>
						<a href="#" class="py-10 fs-14 mb-0 text-primary">
							Best Helth Care here <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				  </div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block">Rhythm Admin Dashboard</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>