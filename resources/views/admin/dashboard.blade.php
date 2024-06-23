@section('style-libs')
<!-- jsvectormap css -->
<link href="{{asset('theme/admin')}}/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

<!--Swiper slider css-->
<link href="{{asset('theme/admin')}}/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

<!-- Layout config Js -->
<script src="{{asset('theme/admin')}}/assets/js/layout.js"></script>
@endsection
@section('style')

@endsection


@extends('admin.layouts.master')


@section('content')

  @include('admin.layouts.content')

@endsection

@section('script-libs')

<!-- apexcharts -->
<script src="{{asset('theme/admin')}}/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Vector map-->
<script src="{{asset('theme/admin')}}/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="{{asset('theme/admin')}}/assets/libs/jsvectormap/maps/world-merc.js"></script>

<!--Swiper slider js-->
<script src="{{asset('theme/admin')}}/assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- Dashboard init -->
<script src="{{asset('theme/admin')}}/assets/js/pages/dashboard-ecommerce.init.js"></script>

@endsection

@section('script')

@endsection