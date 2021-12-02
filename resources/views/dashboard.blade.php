<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} - @if(Auth::user()->role_id == 1) Admin Portal @elseif(Auth::user()->role_id == 2)Patient Portal @elseif(Auth::user()->role_id == 3) Doctor Portal @elseif(Auth::user()->role_id == 4)Secretary Portal @endif
        </h2>
    </x-slot>

    <section class="container my-4">
        <x-flash-messages />
      </section>

     @if (Auth::user()->role_id == 1)
     <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 style="text-align:center;color:grey;font-weight:900;font-size:40px">{{$users->count()}}</h2>
                        <p style="text-align:center;color:grey;font-weight:600;font-size:20px">Curent Users</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 style="text-align:center;color:grey;font-weight:900;font-size:40px">0</h2>
                        <p style="text-align:center;color:grey;font-weight:600;font-size:20px">Active Users</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 style="text-align:center;color:grey;font-weight:900;font-size:40px">0</h2>
                        <p style="text-align:center;color:grey;font-weight:600;font-size:20px">Messages</p>
                    </div>
                </div>
            </div>
        </div>
     </div>


     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h3 class="bold">System Users <span><a style="background:teal;color:white;float:right" href="/dashboard/add-user" class="btn">Add User</a></span></h3> 
                <div class="card cust-card mt-3 mb-3">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">omang</th>
                                <th scope="col">Role</th>
                                <th scope="col">Registration Date</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                               @foreach ($users as $app)
                                @if ($app->role_id == 1)
                                  @else
                                  <tr>
                                    <th scope="row">{{$app->id}}</th>
                                    <th scope="row">{{$app->name}} {{$app->surname}}</th>
                                    <td>{{$app->omang}}</td>
                                    <td>@if ($app->role_id == 2)
                                        Patient
                                        @elseif($app->role_id == 3)
                                           Doctor
                                          @elseif($app->role_id == 4)
                                          Secretary
                                    @endif</td>
                                    <td>{{$app->created_at->diffForHumans()}}</td>
                                    <td><a  class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal{{$app->id}}">View</a></td>
                                    <td></td>
                                  </tr>
                                @endif

                                <div class="modal fade" id="modal{{$app->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">{{$app->name}} {{$app->surname}}</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                         @if($app->role_id == 2)
                                         <ul>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Medical Aid Number: </span>{{$app->medical_aid_no}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Medical Aid: </span>{{$app->medical_aid}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Occupation: </span>{{$app->occupation}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Address: </span>{{$app->address}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Phone #: </span>{{$app->mobile_no}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Omang #: </span>{{$app->omang}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Role: </span>@if ($app->role_id == 2)
                                                Patient
                                                @elseif($app->role_id == 3)
                                                   Doctor
                                                  @elseif($app->role_id == 4)
                                                  Secretary
                                            @endif</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Email: </span>{{$app->email}}</li>
                                            
                                         </ul>
                                         @else
                                         <ul>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Medical Aid Number: </span>{{$app->medical_aid_no}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Medical Aid: </span>{{$app->medical_aid}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Occupation: </span>{{$app->occupation}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Address: </span>{{$app->address}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Phone #: </span>{{$app->mobile_no}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Omang #: </span>{{$app->omang}}</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Role: </span>@if ($app->role_id == 2)
                                                Patient
                                                @elseif($app->role_id == 3)
                                                   Doctor
                                                  @elseif($app->role_id == 4)
                                                  Secretary
                                            @endif</li>
                                            <li style="color:grey"><span style="font-weight:900;font-size:20px">Email: </span>{{$app->email}}</li>
                                            
                                         </ul>
                                         @endif
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-danger">delete user</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
                    <h1 class="bold mb-3">{{Auth::user()->name}} {{Auth::user()->surname}} <span class="btn" style="background:rgb(224, 90, 0);color:white;float:right">Book Appointment</span></h1>
                    <br>
                    <hr class="mb-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/gov.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">My Medical Records</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/ns.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Appointments</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/internship.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Chat</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">Start Chat</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/drugs.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Pharmacy</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/profile.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">My Profile</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/help.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Help</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">open helpdesk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    
     @elseif (Auth::user()->role_id == 3)
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="bold mb-3">{{Auth::user()->name}} {{Auth::user()->surname}} <span class="btn" style="background:teal;color:white;float:right">Contact Admin</span></h1>
                    <hr class="mb-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/booking.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Bookings</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/call.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Doctor</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/patients.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Patients</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/ns.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Up Coming Appointments</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/internship.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Chat</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">Start Chat</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/drugs.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Pharmacy</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/profile.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">My Profile</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/help.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Help</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">open helpdesk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
     @else
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="bold mb-3">{{Auth::user()->name}} {{Auth::user()->surname}} <span class="btn" style="background:teal;color:white;float:right">Contact Admin</span></h1>
                    <hr class="mb-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/money.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Payments</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/call.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Doctor</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">call</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/search.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Search Record</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">lookup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card" >
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/patients.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Patients</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/ns.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Up Coming Appointments</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">manage</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/internship.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Chat</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">Start Chat</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/drugs.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Pharmacy</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/profile.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">My Profile</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mt-3">
                            <div class="card cust-card">
                                <div class="card-body">
                                    <img class="centered-img" width=100 src="{{asset('images/help.png')}}" alt="image">
                                    <h4 class="bold centered-text mt-3">Help</h4>
                                    <a href="" class="btn btn-outline-info mt-3" style="width:70%;display:block;margin:auto">open helpdesk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
     @endif

    
</x-app-layout>
