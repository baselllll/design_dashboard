@include("dashboard.parials.headers")
    <div class="content">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-plain">
                  <div class="card-header card-header-success">
                    <h1 class="card-title mt-0">Project Data</h1>
                          <a href="{{url('dashboard/projects/add')}}"><button class="float-md-right btn btn-primary btn-lg">Add</button></a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead class="text-center font-weight-bold bg-dark text-white font-weight-bold">
                        <th>ID</th>
                        <th>name</th>
                        <th>content</th>
                        <th>link</th>
                        <th>v_link</th>
                        <th>created_at</th>
                        </thead>
                        <tbody>
                        @foreach($project as $pro)
                        <tr class="bg-white font-weight-bold text-center">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$pro->name}}</td>
                            <td>{{$pro->content}}</td>
                            <td><a href="{{$pro->link}}"><u>{{$pro->link}}</u></a></td>
                            <td><a  href="{{$pro->v_link}}"><u>{{$pro->v_link}}</u></a></td>
                            <td>{{$pro->created_at}}</td>
                            <td>
                                <a href="{{url('/dashboard/projects/delete',['id'=>$pro->id])}}"><button class="float-md-right btn btn-success">Delete</button></a>

                                <a href="{{url('/dashboard/projects/edit',['id'=>$pro->id])}}"><button class="float-md-right btn btn-danger">Modify</button></a>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                        <nav class="float-md-right font-weight-bold" aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                {{ $project->links() }}
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@include("dashboard.parials.sripts")
