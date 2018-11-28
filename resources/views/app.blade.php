<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    @include('partials.head')
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('partials.nav')
            @include('partials.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content">
                    {{-- @if (count($errors) > 0)
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif --}}
                    @yield('content')

                </section>
            </div>
            <footer class="main-footer">

                <strong>Copyright rights
                reserved.
            </footer>
        </div>
        @include('partials.scripts')
        @yield('script')
    </body>
</html>
