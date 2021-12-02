<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} - @if(Auth::user()->role_id == 1) Admin Portal - Add User @endif
        </h2>
    </x-slot>

    <section class="container my-4">
        <x-flash-messages />
      </section>

    
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h3 class="bold">Create New User </h3> 
                <div class="card cust-card mt-3 mb-3">
                    <div class="card-body">
                        <form action="/dashboard/add-user" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="First Name" required>
                                    </div>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Surname</label>
                                        <input value="{{old('surname')}}" type="text" name="surname" class="form-control" placeholder="Surame" required>
                                    </div>
                                    @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Omang</label>
                                        <input value="{{old('omang')}}" type="number" name="omang" class="form-control" placeholder="omang" required>
                                    </div>
                                    @if ($errors->has('omang'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('omang') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">System Role</label>
                                        <select name="role_id" id="" class="form-control">
                                            <option value="" selected disabled>Select Role</option>
                                            <option value="2">Patient</option>
                                            <option value="3">Doctor</option>
                                            <option value="4">Secretary</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('role_id'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('role_id') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Occupation</label>
                                        <input value="{{old('occupation')}}" type="text" name="occupation" class="form-control" placeholder="Occupation" required>
                                    </div>
                                    @if ($errors->has('occupation'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input value="{{old('address')}}" type="text" name="address" class="form-control" placeholder="Address" required>
                                    </div>
                                    @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input value="{{old('mobile_no')}}" type="text" name="mobile_no" class="form-control" placeholder="267 7123 563" required>
                                    </div>
                                    @if ($errors->has('mobile_no'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('mobile_no') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Medical Aid Company</label>
                                        <input value="{{old('medical_aid')}}" type="text" name="medical_aid" class="form-control" placeholder="BOMAID" required>
                                    </div>
                                    @if ($errors->has('medical_aid'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('medical_aid') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Medical Aid Number</label>
                                        <input value="{{old('medical_aid_no')}}" type="text" name="medical_aid_no" class="form-control" placeholder="64837583" required>
                                    </div>
                                    @if ($errors->has('medical_aid_no'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('medical_aid_no') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="you@example.com" required>
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            
                            <button type="submit" class="btn mt-4" style="background:teal;color:white">Add User</button>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
     
     

    
</x-app-layout>
