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
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Data Master -->
        <li
            class="menu-item {{ request()->is('/admin/roles') || request()->is('/admin/roles') || request()->is('data-master/guru*') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Account Settings">Data Master</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('/admin/roles') ? 'active' : '' }}">
                    <a href="/admin/roles" class="menu-link">
                        <div data-i18n="Account">Roles</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('/admin/category') ? 'active' : '' }}">
                    <a href="/admin/category" class="menu-link">
                        <div data-i18n="Notifications">Category</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('/admin/sub-category') ? 'active' : '' }}">
                    <a href="/admin/sub-category" class="menu-link">
                        <div data-i18n="Connections">Sub Category</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('pengaturan') ? 'active' : '' }}">
            <a href="/admin/penguji" class="menu-link">
                <i class="menu-icon tf-icons bx bx-wrench"></i>
                <div data-i18n="Basic">Penguji</div>
            </a>
        </li>

        <!-- Pengaturan -->
        <li class="menu-item {{ request()->is('pengaturan') ? 'active' : '' }}">
            <a href="/pengaturan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-wrench"></i>
                <div data-i18n="Basic">Pengaturan</div>
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
