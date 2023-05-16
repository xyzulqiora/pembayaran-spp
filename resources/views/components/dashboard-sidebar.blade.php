<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-bar">
        <div class="nk-apps-brand">
            <a href="/office" class="logo-link">
                <img class="logo-light logo-img" src="{{ asset('Admin/images/logo-small.png') }}" srcset="{{ asset('Admin/images/logo-small2x.png 2x') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('Admin/images/logo-dark-small.png') }}" srcset="{{ asset('Admin/images/logo-dark-small2x.png 2x') }}" alt="logo-dark">
            </a>
        </div>
        <div class="nk-sidebar-element">
            <div class="nk-sidebar-body">
                <div class="nk-sidebar-content" data-simplebar>
                    <div class="nk-sidebar-menu">
                        <ul class="nk-menu apps-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPharmacy">
                                    <span class="nk-menu-icon"><em class="icon ni ni-capsule"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                    <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item active">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                </a>
                            </li>
                            @if(auth()->user()->can('tambah-data'))
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                    <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPages">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-sidebar-main is-light">
        <div class="nk-sidebar-inner" data-simplebar>
            <div class="nk-menu-content" data-content="navPharmacy">
                <h5 class="title">Sistem</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('data-sekolah') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Data Sekolah</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('user') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-capsule-fill"></em></span>
                            <span class="nk-menu-text">Data Pengguna</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('petugas') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-capsule-fill"></em></span>
                            <span class="nk-menu-text">Data Petugas</span>
                        </a>
                    @hasrole('admin')
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('backup') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Backup Database</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                            <span class="nk-menu-text">Restore Database</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-circle-fill"></em></span>
                            <span class="nk-menu-text">Role</span>
                        </a>
                    </li>
                    @endhasrole
                </ul><!-- .nk-menu -->
            </div>
            <div class="nk-menu-content" data-content="navHospital">
                <h5 class="title">Kesiswaan</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('tahun-ajaran') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-note-add-fill"></em></span>
                            <span class="nk-menu-text">Tahun Ajaran</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('kelas') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi-fill"></em></span>
                            <span class="nk-menu-text">Daftar Kelas</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('siswa') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                            <span class="nk-menu-text">Daftar Siswa</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('siswaBylulus') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Kelulusan</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('kenaikan') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Kenaikan Kelas</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('pindah') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Pindah Kelas</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('tinggal') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Tinggal Kelas</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @hasrole('admin|petugas')
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('laporan-siswa') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Laporan</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endhasrole
                </ul><!-- .nk-menu -->
            </div>
            <div class="nk-menu-content menu-active" data-content="navDashboards">
                <h5 class="title">Keuangan</h5>
                <ul class="nk-menu">
                    @hasrole('admin|petugas')
                    <li class="nk-menu-item">
                        <a href="{{ route('create-pembayaran') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                            <span class="nk-menu-text">Pembayaran</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('daftar-kas') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Daftar Kas</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endhasrole
                    <li class="nk-menu-item">
                        <a href="{{ route('metode-pembayaran') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                            <span class="nk-menu-text">Metode Pembayaran</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @hasrole('admin|petugas')
                    <li class="nk-menu-item">
                        <a href="{{ route('daftar-penerimaan') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                            <span class="nk-menu-text">Daftar Penerimaan</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endhasrole
                    <li class="nk-menu-item">
                        <a href="{{ route('biaya') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                            <span class="nk-menu-text">Daftar Biaya Siswa</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @hasrole('admin|petugas')
                    <li class="nk-menu-item">
                        <a href="html/apps-inbox.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-inbox-fill"></em></span>
                            <span class="nk-menu-text">Penerimaan Lain</span>
                        </a>
                    </li>
                    @endhasrole
                </ul><!-- .nk-menu -->
            </div>
            @if(auth()->user()->can('tambah-data'))
            <div class="nk-menu-content" data-content="navApps">
                <h5 class="title">Apps</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('laporan-pembayaran') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-inbox-fill"></em></span>
                            <span class="nk-menu-text">Laporan</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('harian') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                            <span class="nk-menu-text">Harian</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="html/apps-file-manager.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-folder-fill"></em></span>
                            <span class="nk-menu-text">Bulanan</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="html/apps-chats.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                            <span class="nk-menu-text">Tahunan</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="html/apps-calendar.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                            <span class="nk-menu-text">Rekap Per Transaksi</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="html/apps-kanban.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                            <span class="nk-menu-text">Rekap</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="html/apps-kanban.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                            <span class="nk-menu-text">Posisi Kas</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="html/apps-kanban.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                            <span class="nk-menu-text">Tunggakan</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('pembayaran') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                            <span class="nk-menu-text">Riwayat Pembayaran</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="html/apps-kanban.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                            <span class="nk-menu-text">Penghapusan Transaksi</span>
                        </a>
                    </li>
                </ul><!-- .nk-menu -->
            </div>
            <div class="nk-menu-content" data-content="navPages">
                <h5 class="title">Log</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('log-petugas') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                            <span class="nk-menu-text">Aktifitas Data Petugas</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                            <span class="nk-menu-text">Aktifitas Data Transaksi</span>
                        </a>
                        </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                            <span class="nk-menu-text">Aktifitas Data Hapus Transaksi</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div>
            @endif
        </div>
    </div>
</div>
