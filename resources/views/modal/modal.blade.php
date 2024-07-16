<div><!-- Default Modals -->
          <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal"> <i class="las la-plus-circle"></i> New product</button>
          <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="min-width: 1500px; height: 50vh;">
              <form action="{{route('admin.product.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">New product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6 d-flex justify-content-between flex-column">
                        <div class="form-group mb-3">
                          <label for="name" class="form-label">
                            <p style="display: inline-block; margin: 0;">Name</p>
                          </label>
                          <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                          <label for="name" class="form-label">
                            <p style="display: inline-block; margin: 0;">catalogues</p>
                          </label>
                          <select class="form-select mb-3 form-control" aria-label="catalogues" name="catalogue_id">
                            <option selected>Open this select menu</option>
                            @foreach($catalogues as $id => $name)
                            <option value="{{$id}}">{{$name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group mb-3">
                          <label for="name" class="form-label">
                            <p style="display: inline-block; margin: 0;">SKU</p>
                          </label>
                          <input type="text" class="form-control" id="name" name="sku" value="{{ strtoupper(Str::random(8)) }}">
                        </div>
                        <div class="form-group mb-3">
                          <label for="name" class="form-label">
                            <p style="display: inline-block; margin: 0;">Price Regular</p>
                          </label>
                          <input type="number" class="form-control" id="price_regular" name="price_regular">
                        </div>
                        <div class="form-group mb-6">
                          <label for="name" class="form-label">
                            <p style="display: inline-block; margin: 0;">Price Sale</p>
                          </label>
                          <input type="number" class="form-control" id="price_sale" name="price_sale">
                        </div>

                        <div class="form-group mb-3">
                          <label for="" class="form-label">
                            <p style="display: inline-block; margin: 0;">Img Thumbnail</p>
                          </label>
                          <input type="file" class="form-control" name="img_thumbnail">
                        </div>
                        <div class="mb-3">
                          <label for="material" class="form-label">
                            <p style="display: inline-block; margin: 0;">Use Manual</p>
                          </label>
                          <textarea class="form-control" id="use_manual" rows="3" placeholder="Enter your message" name="use_manual"></textarea>
                        </div>
                      </div>
                      <div class="col-6">
                        @php
                        $is = [
                        "is_active" => 'primary',
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
                        <div>
                          <div class="mb-3">
                            <label for="text" class="form-label">
                              <p style="display: inline-block; margin: 0;">Text</p>
                            </label>
                            <textarea class="form-control" id="text" rows="3" placeholder="Enter your message" name="text"></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="material" class="form-label">
                              <p style="display: inline-block; margin: 0;">Material</p>
                            </label>
                            <textarea class="form-control" id="use_manual" rows="3" placeholder="Enter your message" name="material"></textarea>
                          </div>

                          <div class="mb-3">
                            <label for="Content" class="form-label">
                              <p style="display: inline-block; margin: 0;">Content</p>
                            </label>
                            <textarea class="form-control" id="content" rows="3" placeholder="Enter your message" name="Content"></textarea>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 text-capitalize"> Product gallery </h5>
                      </div>
                      <div class="card-body overflow-auto">
                        <div class="d-flex gap-3">
                          <div>
                            <label class="form-label text-capitalize">gallery 1</label>
                            <input type="file" class="form-control" name="product_galleries">
                          </div>
                          <div>
                            <label class="form-label text-capitalize">gallery 2</label>
                            <input type="file" class="form-control" name="product_galleries">
                          </div>
                          <div>
                            <label class="form-label text-capitalize">gallery 3</label>
                            <input type="file" class="form-control" name="product_galleries">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 text-capitalize">Tags </h5>
                      </div>
                      <div class="card-body overflow-auto">
                        <select class="tags" name="tags[]" multiple="multiple">
                          @foreach ($tags as $id => $name )
                          <option value="{{$id}}">{{$name}}</option>
                          @endforeach

                        </select>
                      </div>
                    </div>
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
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($sizes as $sizeID => $sizeValue)
                            @php($flagRowspan = true)
                               @foreach ($colors as $colorID => $colorValue)

                            <tr>

                              @if($flagRowspan)
                              <td style="vertical-align: middle;"
                                rowspan="{{ count($colors) }}"><b>{{ $sizeValue  }}</b></td>
                              @endif
                              @php($flagRowspan = false)

                              <td>
                                <div style="width: 50px; height: 50px; background-color: {{$colorValue}}" class="border"></div>
                              </td>
                              <td><input type="number" class="form-control" id="quantity" name="product_variants[{{$sizeID . '-' . $colorID}}][quantity]" value="0"></td>
                              <td><input type="file" class="form-control" id="images" name="product_variants[{{$sizeID . '-' . $colorID}}][image]"></td>

                            </tr>
                               @endforeach
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
              </form>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->