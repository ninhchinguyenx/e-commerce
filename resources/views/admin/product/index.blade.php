@extends('admin.layouts.master')

@section('style-libs')
   <!--datatable css-->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection


@section('content')


<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">List Product </h5>
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
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 32.4px;" aria-label="ID: activate to sort column ascending">ID</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 78.4px;" aria-label="Name: activate to sort column ascending">Name</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 262.4px;" aria-label="Image Thumbnail: activate to sort column ascending">Image Thumbnail</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 71.4px;" aria-label="Price Regular: activate to sort column ascending">Price Regular</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 80.4px;" aria-label="Price Sale: activate to sort column ascending">Price Sale</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 73.4px;" aria-label="SKU: activate to sort column ascending">SKU</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 73.4px;" aria-label="Material: activate to sort column ascending">Material</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 45.4px;" aria-label="Views: activate to sort column ascending">Views</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 43.4px; display: none;" aria-label="Action: activate to sort column ascending">Action</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 47.4px; display: none;" aria-label="Is Active">Is Active</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 47.4px; display: none;" aria-label="Is Hot Deal">Is Hot Deal</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 47.4px; display: none;" aria-label="Is Show Home">Is Show Home</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 47.4px; display: none;" aria-label="Is Good Deal">Is Good Deal</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 47.4px; display: none;" aria-label="Is New">Is New</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 47.4px; display: none;" aria-label="Text">Text</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 47.4px; display: none;" aria-label="Content">Content</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 47.4px; display: none;" aria-label="Use manual">Use manual</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 80.4px; display: none;" aria-label="Create Date: activate to sort column ascending">Create Date</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 80.4px; display: none;" aria-label="Update Date: activate to sort column ascending">Update Date</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $item)
                  <tr>
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <!-- <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div> -->
                    </th>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td style=""><a href="#!"><img src="" alt=""></a></td>
                    <td style="">{{$item->price_regular}}</td>
                    <td style="">{{$item->price_sale}}</td>
                    <td style="">{{$item->sku}}</td>
                    <td>{{$item->material}} 1</td>
                    <td>{{$item->views}} </td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
                    <td style="display: none;"><span class="badge bg-info-subtle text-info">{{$item->views}}</span></td>
            
                
                  </tr>
                  @endforeach                       
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div><!--end col-->
</div>


@endsection

@section('script-libs')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--datatable js-->
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
@endsection