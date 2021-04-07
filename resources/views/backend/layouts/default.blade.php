@include('backend.layouts.components.header')

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('backend.layouts.components.nav')
            @include('backend.layouts.components.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('titleContent')</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active">@yield('breadcrumb')</div>
                            @yield('morebreadcrumb')
                        </div>
                    </div>
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    @include('backend.layouts.components.credit')
                </div>
                <div class="footer-right">
                    {{ __('v0.1') }} <div class="bullet"></div>
                    {{ __('Laravel v') . Illuminate\Foundation\Application::VERSION }}
                    <div class="bullet"></div>
                    {{ __('PHP v') . PHP_VERSION }}
                </div>
            </footer>
        </div>
    </div>
    @include('backend.layouts.components.footer')
    @yield('script')
</body>

</html>
