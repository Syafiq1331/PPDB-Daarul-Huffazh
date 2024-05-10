<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            {{-- Logo --}}
            <img src="{{ asset('logo.png') }}" alt="" class="w-100">
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('/') ? 'active' : '' }}">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-home"></i>
                <div data-i18n="Analytics">Home</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('profile') ? 'active' : '' }}">
            <a href="/profile" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Basic">Profile</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('daftar-sekarang') ? 'active' : '' }}">
            <a href="daftar-sekarang" class="menu-link">
                <i class="menu-icon tf-icons  bx bxs-heart" type="solid"></i>
                <div data-i18n="Basic">Daftar Sekarang</div>
            </a>
        </li>

        <!-- Pengaturan -->
        <li class="menu-item {{ request()->is('data-sudah-daftar') ? 'active' : '' }}">
            <a href="/data-sudah-daftar" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-voice"></i>
                <div data-i18n="Basic">Data Sudah Daftar</div>
            </a>
        </li>

        <!-- Pengaturan -->
        <li class="menu-item {{ request()->is('pengumuman') ? 'active' : '' }}">
            <a href="/pengumuman" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-info-circle"></i>
                <div data-i18n="Basic">Pengumuman</div>
            </a>
        </li>

        <form id="logout-form" action="/logout" method="POST" style="display: none;">
            @csrf
            <button type="submit">Logout</button>
        </form>

        <li class="menu-item">
            <a href="#" class="menu-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Basic">Logout</div>
            </a>
        </li>

    </ul>


</aside>
