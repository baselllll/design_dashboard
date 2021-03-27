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
                          <form action="{{url('/dashboard/about/store')}}" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="form-group">
                                  <input type="text" name="faculty" class="form-control" placeholder="Enter faculty">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="degree" class="form-control" placeholder="Enter degree">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="gradeY" class="form-control" placeholder="Enter gradeY">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="status" class="form-control" placeholder="Enter status">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="MS" class="form-control" placeholder="Enter MS">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="exper" class="form-control" placeholder="Enter exper">
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
