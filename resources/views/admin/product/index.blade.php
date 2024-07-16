@extends('admin.layouts.master')

@section('style-libs')
<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('style')
<style>
  .form-control {
    border: none;
    border-bottom: 1px solid black;
    border-radius: 0;
    box-shadow: none;
  }

  .form-control:focus {
    border-bottom-color: red;
    box-shadow: none;
  }

  .form-label {
    margin-right: 10px;
  }

  .form-group {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .form-label {
    width: 200px;
    margin-right: 30px;
  }
</style>
@endsection

@section('content')


<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">List Product</h5>
        <a href="{{route('admin.product.create')}}" class="btn btn-primary">Thêm mới</a>
      </div>
      <div class="card-body">
        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
          <div class="row">
            <div class="col-sm-12">
              <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info">
                <thead>
                  <tr>
                    <th scope="col" style="width: 17.4px;" class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                               
                                                    
                                                : activate to sort column descending">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                      </div>
                    </th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending">ID</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Image Thumbnail: activate to sort column ascending">Image Thumbnail</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Price Regular: activate to sort column ascending">Price Regular</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Price Sale: activate to sort column ascending">Price Sale</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="SKU: activate to sort column ascending">SKU</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Material: activate to sort column ascending">Material</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Views: activate to sort column ascending">Views</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Tags: activate to sort column ascending">Tags</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Is Active">Is Active</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Is Hot Deal">Is Hot Deal</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Is Show Home">Is Show Home</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Is Good Deal">Is Good Deal</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Is New">Is New</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Text">Text</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Content">Content</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Use manual">Use manual</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Create Date: activate to sort column ascending">Create Date</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Update Date: activate to sort column ascending">Update Date</th>
                    <th class="sorting" data-ordering="false" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $item)
                  <tr>
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">

                    </th>
                    <td>{{$item->id}}</td>
                    <td>
                      <p style="width: 300px; white-space: nowrap;overflow: hidden; text-overflow: ellipsis;">{{$item->name}}
                      </p>
                    </td>
                    <td>
                      <!-- @if (Str::startsWith($item->img_thumbnail, 'http'))
                      <img src="{{ $item->img_thumbnail }}" alt="Thumbnail" style="width: 70px;">
                      @else
                      <img src="{{ asset('/storage')}}/{{$item->img_thumbnail}}" alt="Thumbnail1" style="width: 70px;">
                      @endif -->
                      @php
                                        $url = $item->img_thumbnail;

                                        if(! \Str::contains($url, 'http')) {
                                            $url = Storage::url($url);
                                        }
                                    @endphp 
                                    <img src="{{ $url }}" alt="" width="100px">
                    </td>
                    <td>{{$item->price_regular}}</td>
                    <td>{{$item->price_sale}}</td>
                    <td>{{$item->sku}}</td>
                    <td>{{$item->material}}</td>
                    <td>{{$item->views}} </td>
                    <td> @foreach($item->tags as $tag)
                      <span class="badge bg-info">{{$tag->name}}</span>
                      @endforeach
                    </td>
                    <td>{!! $item->is_active ? '<span class="badge bg-primary"> Yes </span>' : '<span class="badge bg-danger"> No </span>'!!} </td>
                    <td>{!! $item->is_hot_deal ? '<span class="badge bg-primary"> Yes </span>' : '<span class="badge bg-danger"> No </span>'!!} </td>
                    <td>{!! $item->is_show_home ? '<span class="badge bg-primary"> Yes </span>' : '<span class="badge bg-danger"> No </span>'!!} </td>
                    <td>{!! $item->is_good_deal? '<span class="badge bg-primary"> Yes </span>' : '<span class="badge bg-danger"> No </span>'!!} </td>
                    <td>{!! $item->is_new? '<span class="badge bg-primary"> Yes </span>' : '<span class="badge bg-danger"> No </span>'!!} </td>
                    <td>
                      <p style="width: 400px; white-space: nowrap;overflow: hidden; text-overflow: ellipsis;">{!!$item->text!!}</p>
                    </td>
                    <td>
                      <p style="width: 400px; white-space: nowrap;overflow: hidden; text-overflow: ellipsis;">{!!$item->content!!}</p>
                    </td>
                    <td>
                      <p style="width: 400px; white-space: nowrap;overflow: hidden; text-overflow: ellipsis;">{!!$item->use_manual!!}</p>
                    </td>

                    <td>{{$item->created_at}} </td>
                    <td>{{$item->updated_at}} </td>
                    <td>
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Views</a></li>
                          <li><a href="{{ route('admin.product.edit', $item) }}"class="dropdown-item" ><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div><!--end col-->
</div>


@endsection

@section('script-libs')
<script src="https:////cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<!-- datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="{{asset('theme/admin')}}/assets/js/pages/datatables.init.js"></script>

<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
@section('script')
<script>
  CKEDITOR.replace('content');
  CKEDITOR.replace('use_manual');

  $(document).ready(function() {
    $('.tags').select2();

  });
</script>
@endsection