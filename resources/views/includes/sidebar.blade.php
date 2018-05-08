<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="index.html"><i class="icon-home4"></i> <span>Beranda</span></a></li>
								<li>
                                    <a href="#"><i class="icon-users"></i> <span>Data Karyawan</span></a>
									<ul>
                                        <li><a href="{{url('karyawan-tetap')}}">Karyawan Tetap</a></li>
                                        <li><a href="{{url('karyawan-kontrak')}}">Karyawan Kontrak</a></li>
                                        <li><a href="{{url('kontrak-karyawan')}}">Data Kontrak Karyawan</a></li>
									</ul>
								</li>
                               
								<li>
                                    <a href="#"><i class="icon-calendar"></i> <span>Data Absensi</span></a>
									<ul>
                                        <li><a href="{{url('data-absensi')}}">List Data</a></li>
                                        <li><a href="{{url('form-absensi')}}">Form Absensi</a></li>
									</ul>
								</li>
                               
								<li>
									<a href="#"><i class="icon-calendar2"></i> <span>Data Cuti</span></a>
									<ul>
                                        <li><a href="{{url('data-cuti')}}">Data Cuti</a></li>
                                        <li><a href="{{url('pengajuan-cuti')}}">Form Pengajuan Cuti</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Master Data</span></a>
									<ul>
                                        <li><a href="{{url('data-bank')}}">Data Bank</a></li>
                                        <li><a href="{{url('jenis-cuti')}}">Data Jenis Cuti</a></li>
                                        <li><a href="{{url('jenis-golongan')}}">Data Jenis Golongan</a></li>
                                        <li><a href="{{url('jabatan')}}">Data Jabatan</a></li>
                                        <li><a href="{{url('jenis-potongan')}}">Data Jenis Potongan</a></li>
                                        <li><a href="{{url('komponen-gaji')}}">Data Komponen Gaji</a></li>
                                        <li><a href="{{url('data-vendor')}}">Data Vendor</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-cogs"></i> <span>Pengaturan</span></a>
									<ul>
                                        <li><a href="{{url('hari-libur')}}">Hari Libur</a></li>
									</ul>
								</li>
								

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>