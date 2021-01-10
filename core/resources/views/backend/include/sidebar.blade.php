<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-section">
                <h4 class="menu-text">Master Data</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li class="menu-item {{ Request::is('admin/dashboard*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('back.dashboard') }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <i class="fas fa-tachometer-alt"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/user*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('back.user') }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <i class="fas fa-user"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Manajemen User</span>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/barang*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('barang') }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <i class="fas fa-boxes"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">List Barang</span>
                </a>
            </li>

            <li class="menu-section">
                <h4 class="menu-text">Transaksi</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li class="menu-item {{ Request::is('admin/transaksi/in*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('in') }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <i class="fas fa-download"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Barang Masuk (In)</span>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/transaksi/out*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('out') }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <i class="fas fa-upload"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Barang Keluar (Out)</span>
                </a>
            </li>
            
            {{-- <li class="menu-item {{ Request::is('admin/histori/in*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('histori.in') }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <i class="fas fa-history"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Histori Barang Masuk</span>
                </a>
            </li> --}}

            <li class="menu-section">
                <h4 class="menu-text">Laporan</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li class="menu-item {{ Request::is('admin/on-hand*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('onhand') }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <i class="fas fa-dolly-flatbed"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">On Hand</span>
                </a>
            </li>
            
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>