@extends('admin.layouts.master')
@section('style-libs')
<link href="{{asset('theme/admin')}}/assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
<!-- dropzone css -->
<link rel="stylesheet" href="{{asset('theme/admin')}}/assets/libs/dropzone/dropzone.css" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')



<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
      <h4 class="mb-sm-0">Edit Product</h4>

      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
          <li class="breadcrumb-item active">Edit Product</li>
        </ol>
      </div>

    </div>
  </div>
</div>
<!-- end page title -->
@if ($errors->any() || session('error'))
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header align-items-center d-flex">
        @if ($errors->any())
        <div class="alert alert-danger" style="width: 100%;">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger" style="width: 100%;">
          {{ session('error')  }}
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endif
<form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate="" action="{{route('admin.product.store')}}" enctype="multipart/form-data" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label" for="product-title-input">Product Name</label>

            <input type="text" class="form-control" id="product-title-input" placeholder="Enter product name" name="name" value="{{ $product->name }}">
            <div class="invalid-feedback">Please Enter a product name.</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="product-title-input">Price Regular</label>

            <input type="number" name="price_regular" class="form-control" id="product-title-input" value="" placeholder="Enter product rice regular" value="{{ $product->price_regular }}">
            <div class="invalid-feedback">Please Enter a product price regular.</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="product-title-input">Price Sale</label>

            <input type="number" name="price_sale" class="form-control" id="product-title-input" value="" placeholder="Enter product rice sale" value="{{ $product->price_sale }}">
            <div class="invalid-feedback">Please Enter a product sale.</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="product-title-input">SKU</label>

            <input type="text" name="sku" class="form-control" id="product-title-input" value="{{ strtoupper(Str::random(8)) }}" value="{{ $product->sku }}">
            <div class="invalid-feedback">Please Enter a product sku.</div>
          </div>
          <div class="mb-3">
            <label>Product Description</label>

            <textarea id="text" name="text">
            {{ $product->text }}
            </textarea>

          </div>
          <div class="mb-3">
            <label>Use Manual</label>

            <textarea id="use_manual" name="use_manual">
            {{ $product->use_manual }}
            </textarea>

          </div>
          <div class="mb-3">
            <label>Material</label>

            <textarea id="material" class="form-control" name="material">
            {{ $product->material }}
            </textarea>

          </div>

        </div>
      </div>
      <!-- end card -->

      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Img</h5>
        </div>
        <div class="card-body">
          <div class="mb-4">
            <h5 class="fs-14 mb-1">Product Image</h5>
            <p class="text-muted">Add Product main Image.</p>
            <div class="text-center">
              @if($product->img_thumbnail)
              <img src="{{ \Storage::url($product->img_thumbnail) }}" width="100px">
              @endif
              <input type="file" class="form-control" name="img_thumbnail">
            </div>
          </div>


        </div>
        <div class="card">
          <div class="card-header align-items-center d-flex justify-content-between">
            <h5 class="card-title mb-0 fs-14 mb-1">Product Gallery</h5>
            <button type="button" class="btn btn-primary" onclick="addImageGallery()">Thêm ảnh</button>
          </div><!-- end card header -->
          <div class="card-body">
            <div class="live-preview">

              <div class="row gap-1" id="gallery_list">
                @if(count($product->galleries) > 0)
                @foreach($product->galleries as $item)
                <div class="col-md-4" id="storage_{{ $item->id }}_item">
                  <!-- <label for="gallery_default" class="form-label">Image</label> -->
                  <div class="d-flex flex-column gap-1 justify-content-between align-items-center">
                    <input type="file" class="form-control" name="product_galleries[]"
                      id="gallery_default">
                    <img src="{{ \Storage::url($item->image) }}" width="100px" alt="">
                    <button type="button" class="btn btn-danger"
                      onclick="removeImageGallery('storage_{{ $item->id }}_item', '{{ $item->id }}', '{{ $item->image }}')">
                      <span class="bx bx-trash"></span>
                    </button>
                  </div>
                </div>
                @endforeach
                @else
                <div class="col-md-4" id="gallery_default_item">
                  <label for="gallery_default" class="form-label">Image</label>
                  <div class="d-flex">
                    <input type="file" class="form-control" name="product_galleries[]"
                      id="gallery_default">
                  </div>
                </div>
                @endif
              </div>

              {{--Thằng này dùng để lưu ảnh xóa--}}
              <div id="delete_galleries"></div>


            </div>
          </div>

        </div>
        <!-- end dropzon-preview -->

      </div>
      <!-- end card -->

      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0 text-capitalize"> Products variant </h5>
        </div>
        <div class="card-body overflow-auto" style="height: 300px;">
          <table class="table align-middle table-nowrap mb-0 ">
            <thead>
              <tr>
                <th scope="col">Size</th>
                <th scope="col">Color</th>
                <th scope="col">Quantity</th>
                <th scope="col">Images</th>
                <th></th>
              </tr>
            </thead>
            @php
            $variants = [];
            $product->variants->map(function ($item) use (&$variants) {
            $key = $item->product_size_id . '-' . $item->product_color_id;
            $variants[$key] = [
            'quatity' => $item->quatity,
            'image' => $item->image,
            ];
            });
            @endphp
            <tbody>
              @foreach ($sizes as $sizeID => $sizeValue)
              @php
              $flagRowspan = true
              @endphp
              @foreach ($colors as $colorID => $colorValue)

              <tr>

                @if($flagRowspan)
                <td style="vertical-align: middle;"
                  rowspan="{{ count($colors) }}"><b>{{ $sizeValue  }}</b></td>
                @endif
                @php
                $flagRowspan = false;
                $key = $sizeID . '-' . $colorID
                @endphp

                <td>
                  <div style="width: 50px; height: 50px; background-color: {{$colorValue}}" class="border"></div>
                </td>
                <td><input type="number" class="form-control" id="quantity" name="product_variants[{{$sizeID . '-' . $colorID}}][quantity]"  value="{{ $variants[$key]['quatity'] }}"></td>
                <td><input type="file" class="form-control" id="images" name="product_variants[{{$sizeID . '-' . $colorID}}][image]"></td>
                <td>
                  @if($variants[$key]['image'])
                  <img src="{{ \Storage::url($variants[$key]['image']) }}"
                    width="100px">
                  @endif
                </td>
              </tr>
              @endforeach
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
      <!-- end card -->
      <div class="text-end mb-3">
        <button type="submit" class="btn btn-success w-sm">Submit</button>
      </div>
    </div>
    <!-- end col -->

    <div class="col-lg-4">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Publish</h5>
        </div>
        <div class="card-body">
          <div>
            <label for="choices-publish-visibility-input" class="form-label">Visibility</label>
            <div>
            </div>
            <select class="form-select mb-3" name="is_active">
              <option value="1" @selected($product->is_active == 1) >Publish</option>
              <option value="0" @selected($product->is_active == 0)>Hidden</option>
            </select>
          </div>
        </div>
        <!-- end card body -->
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Setting</h5>
        </div>
        <div class="card-body">
          <div>

            <div>
            </div>
            @php
            $is = [
            "is_hot_deal" => 'danger',
            "is_show_home" => 'warning',
            "is_good_deal" => 'success',
            "is_new" => 'info',
            ]
            @endphp
            <div class="row gap-3 border p-3 mb-3">
              @foreach ($is as $key => $color )
              <div class="form-check form-switch form-switch-{{$color}} col-4">
                <input class="form-check-input" type="checkbox" role="switch" value="1" id="{{$key}}" checked name="{{$key}}">
                <label class="form-check-label" for="{{$key}}">{{Str::convertCase($key, MB_CASE_TITLE)}}</label>
              </div>
              @endforeach
            </div>
          </div>
          <!-- end card body -->
        </div>
        <!-- end card -->
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Publish Schedule</h5>
        </div>
        <!-- end card body -->
        <div class="card-body">
          <div>
            <label for="datepicker-publish-input" class="form-label">Publish Date &amp; Time</label>
            <input type="date" name="publish_date" class="form-control" id="date-input">
          </div>
        </div>
      </div>
      <!-- end card -->

      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Product Categories</h5>
        </div>
        <div class="card-body">
          <select class="form-select mb-3 form-control" aria-label="catalogues" name="catalogue_id">
            <option selected>Open this select menu</option>
            @foreach($catalogues as $id => $name)
            <option @selected($product->catalogue_id == $id) value="{{ $id }}">{{$name}}</option>
            @endforeach
          </select>
        </div>
        <!-- end card body -->
      </div>
      <!-- end card -->
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Product Tags</h5>
        </div>
        <div class="card-body overflow-auto">
          <select class="tags" name="tags[]" multiple="multiple">
            @php($productTags = $product->tags->pluck('id')->all())
            @foreach($tags as $id => $name)
            <option
              @selected(in_array($id, $productTags)) value="{{ $id }}">{{ $name }}</option>
            @endforeach

          </select>

        </div>
        <!-- end card body -->
      </div>
      <!-- end card -->

      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Product Short Description</h5>
        </div>
        <div class="card-body">
          <p class="text-muted mb-2">Add short description for product</p>
          <textarea class="form-control" placeholder="Must enter minimum of a 100 characters" rows="3" name="content" id="content">{{$product->content}}</textarea>
        </div>
        <!-- end card body -->
      </div>
      <!-- end card -->

    </div>
    <!-- end col -->
  </div>
  <!-- end row -->

</form>


@endsection

@section('script-libs')
<!-- ckeditor -->
<script src="{{asset('theme/admin')}}/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{asset('theme/admin')}}/assets/js/pages/ecommerce-product-create.init.js"></script>

<!-- dropzone min -->
<script>
  $(document).ready(function() {
    $('.tags').select2();
  });

  function addImageGallery() {
    let id = 'gen' + '_' + Math.random().toString(36).substring(2, 15).toLowerCase();
    let html = `
                <div class="col-md-4" id="${id}_item">
                    <label for="${id}" class="form-label">Image</label>
                    <div class="d-flex">
                        <input type="file" class="form-control" name="product_galleries[]" id="${id}">
                        <button type="button" class="btn btn-danger" onclick="removeImageGallery('${id}_item')">
                            <span class="bx bx-trash"></span>
                        </button>
                    </div>
                </div>
            `;

    $('#gallery_list').append(html);
  }

  function removeImageGallery(id) {
    if (confirm('Chắc chắn xóa không?')) {
      $('#' + id).remove();
    }
  }
</script>

@endsection