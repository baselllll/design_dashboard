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
                    <h1 class="card-title mt-0">All Knowlege of Personnel</h1>
                          <a href="{{url('dashboard/about/add')}}"><button class="float-md-right btn btn-primary btn-lg">Add</button></a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table ">
                        <thead class="text-center font-weight-bold bg-dark text-white font-weight-bold">
                        <th>ID</th>
                        <th>faculty</th>
                        <th>degree</th>
                        <th>gradeY</th>
                        <th>status</th>
                        <th>MS</th>
                        <th>exper</th>
                        <th>created_at</th>
                        </thead>
                        <tbody>
                        @foreach($about as $ab)
                        <tr class="bg-white font-weight-bold text-center">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$ab->faculty}}</td>
                            <td>{{$ab->degree}}</td>
                            <td>{{$ab->gradeY}}</td>
                            <td>{{$ab->status}}</td>
                            <td>{{$ab->MS}}</td>
                            <td>{{$ab->exper}}</td>
                            <td>{{$ab->created_at}}</td>
                            <td>
                                <a href="{{url('/dashboard/about/delete',['id'=>$ab->id])}}"><button class="float-md-right btn btn-success">Delete</button></a>

                                <a href="{{url('/dashboard/about/edit',['id'=>$ab->id])}}"><button class="float-md-right btn btn-danger">Modify</button></a>


                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                        <nav class="float-md-right font-weight-bold" aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                {{ $about->links() }}
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
