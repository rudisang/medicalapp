<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div>
                <x-label for="omang" :value="__('Omang')" />

                <x-input id="omang" class="block mt-1 w-full" type="number" min=0 name="omang" :value="old('omang')" required autofocus />
            </div> 

        
                                    <div class="row mb-3">
                                        <div class="col-sm-12 mt-3">
                                            <select name="title" class="form-select" aria-label="Select Title">
                                                <option selected disabled>Select Title</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Mrs">Mrs</option>
                                              </select>
                                              @if ($errors->has('title'))
                                                    <span class="help-block">
                                                        <strong style="color:red">{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
        
                                    <div class="row mb-4">
                                       
        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label  class="form-label">Date of Birth</label>
                                                <input type="date" name="date_of_birth" class="form-control" placeholder="">
                                              </div>
                                              @if ($errors->has('date_of_birth'))
                                                <span class="help-block">
                                                    <strong style="color:red">{{ $errors->first('date_of_birth') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
        
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <select name="gender" class="form-select" aria-label="Select Gender">
                                                <option selected disabled>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                
                                              </select>
                                              @if ($errors->has('gender'))
                                                    <span class="help-block">
                                                        <strong style="color:red">{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
        
                                        <div class="col-sm-12 mt-3 mb-3">
                                            <select name="marital_status" class="form-select" aria-label="Select Gender">
                                                <option selected disabled>Select Marital Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Widowed">Widowed</option>
                                              </select>
                                              @if ($errors->has('marital_status'))
                                                    <span class="help-block">
                                                        <strong style="color:red">{{ $errors->first('marital_status') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label  class="form-label">Correspondance Address</label>
                                                <input type="text" name="co_address" value="" class="form-control" placeholder="">
                                              </div>
                                              @if ($errors->has('co_address'))
                                                    <span class="help-block">
                                                        <strong style="color:red">{{ $errors->first('co_address') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label  class="form-label">Tel #</label>
                                                <input type="number" name="tel_no"  class="form-control" placeholder="">
                                              </div>
                                              @if ($errors->has('tel_no'))
                                                <span class="help-block">
                                                    <strong style="color:red">{{ $errors->first('tel_no') }}</strong>
                                                </span>
                                            @endif
                                        </div>
        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label  class="form-label">Mobile #</label>
                                                <input type="number" name="mobile_no" class="form-control" placeholder="">
                                              </div>
                                              @if ($errors->has('mobile_no'))
                                                    <span class="help-block">
                                                        <strong style="color:red">{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
        
                                    <div class="row mb-3">
                                    
        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label  class="form-label">Fax</label>
                                                <input type="text" name="fax" value="" class="form-control" placeholder="">
                                              </div>
                                              @if ($errors->has('fax'))
                                                <span class="help-block">
                                                    <strong style="color:red">{{ $errors->first('fax') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
     
           

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
