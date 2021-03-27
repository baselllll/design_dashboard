@include("dashboard.parials.headers")
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
              </div>
              <div class="card-body p-5">
                  <form action="{{url('dashboard/profile/update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                     {{csrf_field()}}
                      <div class="form-group">
                          <input type="text" name="name" class="form-control" value="{{$user->name}}">
                      </div>
                      <div class="form-group">
                          <input type="text" name="title" class="form-control"  value="{{$user->title}}">
                      </div>
                      <div class="form-group">
                          <input type="text" name="content" class="form-control" value="{{$user->content}}">
                      </div>
                      <input type="file" name="img" class="form-control" required>
                      <div class="form-group text-center">
                          <img width="70px" height="70px" class="img-thumbnail" src="{{asset('/dashboard/imagesdash/'.$user->img)}}" alt="Italian Trulli">
                      </div>

                      <div class="form-group text-center">
                          <button type="submit" class="text-center btn btn-primary text-capitalize font-size-4"><i class="fa fa-plus"></i>Update</button>
                      </div>
                  </form><!-- end of form -->

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <a href="javascript:;">
                  <img class="img" src="{{asset('/dashboard/imagesdash/'.$user->img)}}" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="card-category text-gray">{{$user->title}}</h6>
                <h4 class="card-title">{{$user->name}}</h4>
                <p class="card-description">
                </p>
                <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@include("dashboard.parials.sripts")
