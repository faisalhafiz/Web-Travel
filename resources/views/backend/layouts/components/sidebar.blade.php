<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">{{ __('pages.title') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">{{ __('pages.brand') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">{{ __('Menu Utama') }}</li>
            <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>{{ __('Dashboard') }}</span></a>
            </li>
            <li class="{{ Request::route()->getName() == 'reports.index' ? 'active' : (
                Request::route()->getName() == 'reports.create' ? 'active' : (
                Request::route()->getName() == 'reports.show' ? 'active' : '')) }}">
                <a href="{{ route('reports.index') }}" class="nav-link"><i
                        class="fas fa-file-contract"></i><span>{{ __('Pengumpulan') }}</span></a>
            </li>
            @if (Auth::user()->roles == 2 or Auth::user()->roles == 4)
            <li class="menu-header">{{ __('Master') }}</li>
            <li class="{{ Request::route()->getName() == 'user.index' ? 'active' : (
                Request::route()->getName() == 'user.create' ? 'active' : (
                    Request::route()->getName() == 'user.edit' ? 'active' : '')) }}">
                <a href="{{ route('user.index') }}" class="nav-link"><i
                        class="fas fa-users"></i><span>{{ __('Karyawan') }}</span></a>
            </li>
            <li class="{{ Request::route()->getName() == 'division.index' ? 'active' : (
                Request::route()->getName() == 'division.create' ? 'active' : '') }}">
                <a href="{{ route('division.index') }}" class="nav-link"><i
                        class="fas fa-user-tag"></i><span>{{ __('Divisi') }}</span></a>
            </li>
            <li class="menu-header">{{ __('Karyawan') }}</li>
            <li class="nav-item dropdown {{ Request::route()->getName() == 'reports-employee.index' ? 'active' : (
                    Request::route()->getName() == 'accept.employee' ? 'active' : (
                        Request::route()->getName() == 'decline.employee' ? 'active' : '')) }}">
                <a href="javascript:void(0)" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i><span>{{ __('Pengumpulan') }}</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ Request::route()->getName() == 'reports-employee.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('reports-employee.index') }}">{{ __('Pending') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'accept.employee' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('accept.employee') }}">{{ __('Diterima') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'decline.employee' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('decline.employee') }}">{{ __('Ditolak') }}</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::route()->getName() == 'plan.index' ? 'active' : (
                Request::route()->getName() == 'plan.create' ? 'active' : (
                    Request::route()->getName() == 'plan.show' ? 'active' : (
                        Request::route()->getName() == 'plan.edit' ? 'active' : ''))) }}">
                <a href="{{ route('plan.index') }}" class="nav-link"><i
                        class="fas fa-list-alt"></i><span>{{ __('Perencanaan') }}</span></a>
            </li>
            @endif
            <li class="menu-header">{{ __('Maintance') }}</li>
            <li class="{{ Request::route()->getName() == 'plan.index' ? 'active' : (
                Request::route()->getName() == 'plan.create' ? 'active' : (
                    Request::route()->getName() == 'plan.show' ? 'active' : (
                        Request::route()->getName() == 'plan.update' ? 'active' : ''))) }}">
                <a href="{{ route('plan.index') }}" class="nav-link"><i
                        class="fas fa-desktop"></i><span>{{ __('Komputer') }}</span></a>
            </li>
            <li class="menu-header">{{ __('Laporan') }}</li>
            <li class="{{ Request::route()->getName() == 'plan.index' ? 'active' : (
                Request::route()->getName() == 'plan.create' ? 'active' : (
                    Request::route()->getName() == 'plan.show' ? 'active' : (
                        Request::route()->getName() == 'plan.edit' ? 'active' : ''))) }}">
                <a href="{{ route('plan.index') }}" class="nav-link"><i
                        class="fas fa-list-alt"></i><span>{{ __('Cetak') }}</span></a>
            </li>
        </ul>
    </aside>
</div>