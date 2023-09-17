<body>
	<div class="container-scroller">
		<!-- partial:<?= base_url();?>assets_admin/partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div
				class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
			>
				<a
					class="navbar-brand brand-logo mr-5"
					href="<?= base_url();?>assets_admin/index.html"
					><img
						src="<?= base_url();?>assets_admin/images/logo.svg"
						class="mr-2"
						alt="logo"
				/></a>
				<a
					class="navbar-brand brand-logo-mini"
					href="<?= base_url();?>assets_admin/index.html"
					><img
						src="<?= base_url();?>assets_admin/images/logo-mini.svg"
						alt="logo"
				/></a>
			</div>
			<div
				class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
			>
				<button
					class="navbar-toggler navbar-toggler align-self-center"
					type="button"
					data-toggle="minimize"
				>
					<span class="icon-menu"></span>
				</button>
				<ul class="navbar-nav mr-lg-2">
					<li class="nav-item nav-search d-none d-lg-block">
					<form method="POST">	
					<div class="input-group">
					<div class="input-group-prepend hover-cursor">
    <button type="submit" class="input-group-text" id="search">
      <i class="icon-search"></i>
    </button>
  </div>
							<input
								type="text"
								class="form-control"
								name="keyword"
								id="navbar-search-input"
								placeholder="Cari data..."
								autocomplete="off"
								autofocus
							/>
						</div>
</form>
					</li>
				</ul>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item nav-profile dropdown">
						<a
							class="nav-link dropdown-toggle"
							href="#"
							data-toggle="dropdown"
							id="profileDropdown"
						>
							<img
								src="<?= base_url();?>assets_admin/images/faces/face28.jpg"
								alt="profile"
							/>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right navbar-dropdown"
							aria-labelledby="profileDropdown"
						>
							<a class="dropdown-item">
								<i class="ti-settings text-primary"></i>
								Settings
							</a>
							<a class="dropdown-item">
								<i class="ti-power-off text-primary"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
				<button
					class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
					type="button"
					data-toggle="offcanvas"
				>
					<span class="icon-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:<?= base_url();?>assets_admin/partials/_settings-panel.html -->
			<div class="theme-setting-wrapper">
				<div id="settings-trigger"><i class="ti-settings"></i></div>
				<div id="theme-settings" class="settings-panel">
					<i class="settings-close ti-close"></i>
					<p class="settings-heading">SIDEBAR SKINS</p>
					<div class="sidebar-bg-options selected" id="sidebar-light-theme">
						<div class="img-ss rounded-circle bg-light border mr-3"></div>
						Light
					</div>
					<div class="sidebar-bg-options" id="sidebar-dark-theme">
						<div class="img-ss rounded-circle bg-dark border mr-3"></div>
						Dark
					</div>
					<p class="settings-heading mt-2">HEADER SKINS</p>
					<div class="color-tiles mx-0 px-4">
						<div class="tiles success"></div>
						<div class="tiles warning"></div>
						<div class="tiles danger"></div>
						<div class="tiles info"></div>
						<div class="tiles dark"></div>
						<div class="tiles default"></div>
					</div>
				</div>
			</div>
			<!-- partial -->
			<!-- partial:<?= base_url();?>assets_admin/partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url();?>admin">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a
							class="nav-link"
							data-toggle="collapse"
							href="#tables"
							aria-expanded="false"
							aria-controls="tables"
						>
							<i class="icon-grid-2 menu-icon"></i>
							<span class="menu-title">Table</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="tables">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url();?>berita"
										>Berita</a
									>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url();?>pengumuman"
										>Pengumuman</a
									>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url();?>sejarah"
										>Sejarah</a
									>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url();?>visi_misi"
										>Visi dan Misi</a
									>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url();?>pengelola"
										>Pengelola</a
									>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url();?>tokoh_pengelola"
									>Tokoh Pengelola</a
									>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url();?>pusat_studi"
										>Pusat Studi</a
									>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url();?>tokoh_pusat_studi"
										>Tokoh Pusat Studi</a
									>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a
							class="nav-link"
							data-toggle="collapse"
							href="#auth"
							aria-expanded="false"
							aria-controls="auth"
						>
							<i class="icon-head menu-icon"></i>
							<span class="menu-title">User Pages</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="auth">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item">
									<a
										class="nav-link"
										href="<?= base_url();?>assets_admin/pages/samples/login.html"
									>
										Login
									</a>
								</li>
								<li class="nav-item">
									<a
										class="nav-link"
										href="<?= base_url();?>assets_admin/pages/samples/register.html"
									>
										Register
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-12 grid-margin">
				<div class="row">
					<div class="col-12 col-xl-8 mb-4 mb-xl-0">
						<h3 class="font-weight-bold"><?= $tittle?></h3>
					</div>
					<div class="col-12 col-xl-4">
						<div class="justify-content-end d-flex">
						<i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
						</div>
					</div>
				</div>
			</div>
		</div>
