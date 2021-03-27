@include("dashboard.parials.headers")
    <div class="content">
      <div class="container-fluid">
          <h2>Add New Field</h2>
        <div class="row">
          <div class="container-fluid">

            <div class="row">
              <div class="col-md-12">
                <div class="card card-plain">
                  <div class="card-body">
                      <div class="box w-75 m-auto table-responsive card p-5">
                          <form action="{{url('/dashboard/projects/store')}}" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="form-group">
                                  <input type="text" name="name" class="form-control" placeholder="Enter name">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="content" class="form-control" placeholder="Enter content">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="link" class="form-control" placeholder="Enter link">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="v_link" class="form-control" placeholder="Enter v_link">
                              </div>
                              <div class="form-group text-center">
                                  <button type="submit" class="text-center btn btn-primary text-capitalize font-size-4"><i class="fa fa-plus"></i> @lang('site.add')</button>
                              </div>
                          </form><!-- end of form -->
                      </div><!-- end of box body -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@include("dashboard.parials.sripts")
