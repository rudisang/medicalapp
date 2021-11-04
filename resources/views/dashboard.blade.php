<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="container my-4">
        <x-flash-messages />
      </section>

     @if (Auth::user()->role_id == 1)
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h3 class="bold">Internship Applications</h3>
                <div class="card cust-card mt-3 mb-3">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Applicant</th>
                                <th scope="col">Field Applied</th>
                                <th scope="col">Applied On</th>
                                <th scope="col">Application Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                               @foreach ($applications as $app)
                               <tr>
                                <th scope="row">{{$app->id}}</th>
                                <th scope="row">{{$app->user->name}}</th>
                                <td>{{$app->field_of_interest}}</td>
                                <td>{{$app->created_at->diffForHumans()}}</td>
                                <td>@if ($app->application_status == 0)
                                    <a class="btn btn-warning">Pending</a>
                                    @elseif($app->application_status == 1)
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ex">
                                        Approved
                                      </button>
                                      @else
                                      <a class="btn btn-danger">Rejected</a>
                                @endif</td>
                                
                                <td><a href="" class="btn btn-info">Manage</a></td>
                                <td></td>
                              </tr>
                               @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
     
     @elseif (Auth::user()->role_id == 2)
      
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="bold mb-3">APPLY</h3>
                    <hr class="mb-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/gov.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">GVS</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">apply</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/ns.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">BNSP</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">apply</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/internship.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Internship</h4>
                                    <a href="/dashboard/internship/apply" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="bold">My Applications</h3>
                    <div class="card cust-card mt-3 mb-3">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Field Applied</th>
                                    <th scope="col">Applied On</th>
                                    <th scope="col">Application Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                   
                                    <tr>
                                      <th scope="row">{{Auth::user()->internshipapplication->id}}</th>
                                      <td>{{Auth::user()->internshipapplication->field_of_interest}}</td>
                                      <td>{{Auth::user()->internshipapplication->created_at->diffForHumans()}}</td>
                                      <td>@if (Auth::user()->internshipapplication->application_status == 0)
                                          <a class="btn btn-warning">Under Review</a>
                                          @elseif(Auth::user()->internshipapplication->application_status == 1)
                                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ex">
                                              Approved
                                            </button>
                                            @else
                                            <a class="btn btn-danger">Rejected</a>
                                      @endif</td>
                                      
                                      <td><a href="" class="btn btn-info">view my application</a></td>
                                      <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
     @else

     @endif

    
</x-app-layout>
