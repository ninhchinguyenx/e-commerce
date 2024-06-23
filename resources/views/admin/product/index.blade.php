@extends('admin.layouts.master')


@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">List Product</h5>
      </div>
      <div class="card-body">
        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="form-select form-select-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select> entries</label></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info">
                <thead>
                  <tr>
                    <th scope="col" style="width: 16.8px;" class="sorting sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="
                                                    
                                                        
                                                    
                                                : activate to sort column ascending" aria-sort="descending">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                      </div>
                    </th>
                    <th >ID</th>
                    <th >Img Thumnail</th>
                    <th >Price Regular</th>
                    <th>Price Sale</th>
                    <th >SKU</th>
                    <th>View</th>
                    <th>Is Active</th>
                    <th >Is Good Deal</th>
                    <th >Is Show Home</th>
                    <th>Is New</th>
                    <th >Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr class="odd">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>01</td>
                    <td>VLZ-452</td>
                    <td>VLZ1400087402</td>
                    <td><a href="#!">Post launch reminder/ post list</a></td>
                    <td>Joseph Parker</td>
                    <td>Alexis Clarke</td>
                    <td>Joseph Parker</td>
                    <td>03 Oct, 2021</td>
                    <td><span class="badge bg-info-subtle text-info">Re-open</span></td>
                    <td style="display: none;"><span class="badge bg-danger">High</span></td>
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
                  </tr>
                
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                  <li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--end col-->
</div>

@endsection