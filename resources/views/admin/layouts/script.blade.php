
<!-- JAVASCRIPT -->

<script>
  const PATH_ROOT = "{{asset('theme/admin')}}"
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('theme/admin')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('theme/admin')}}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('theme/admin')}}/assets/libs/node-waves/waves.min.js"></script>
<script src="{{asset('theme/admin')}}/assets/libs/feather-icons/feather.min.js"></script>
<script src="{{asset('theme/admin')}}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="{{asset('theme/admin')}}/assets/js/plugins.js"></script>

@yield('script-libs')
<!-- App js -->
<script src="{{asset('theme/admin')}}/assets/js/app.js"></script>

@yield('script')


