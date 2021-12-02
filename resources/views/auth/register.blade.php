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
                <x-label for="surname" :value="__('Surname')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
            </div>

            <div>
                <x-label for="omang" :value="__('Omang')" />

                <x-input id="omang" class="block mt-1 w-full" type="number" min=0 name="omang" :value="old('omang')" required autofocus />
            </div> 

        
                                    <div class="row mb-3">

        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label  class="form-label">Address</label>
                                                <input type="text" name="address" value="" class="form-control" placeholder="">
                                              </div>
                                              @if ($errors->has('address'))
                                                    <span class="help-block">
                                                        <strong style="color:red">{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="row mb-4">
        
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
                                                <label  class="form-label">Occupation</label>
                                                <input type="text" name="occupation" value="" class="form-control" placeholder="">
                                              </div>
                                              @if ($errors->has('occupation'))
                                                <span class="help-block">
                                                    <strong style="color:red">{{ $errors->first('occupation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
     
           
                                    <div>
                                        <x-label for="medical_aid" :value="__('Medical Aid Company')" />
                        
                                        <x-input id="medical_aid" class="block mt-1 w-full" type="text" name="medical_aid" :value="old('medical_aid')" required autofocus />
                                    </div>
                        
                                    <div>
                                        <x-label for="medical_aid_no" :value="__('Medical Aid No')" />
                        
                                        <x-input id="medical_aid_no" class="block mt-1 w-full" type="text" name="medical_aid_no" :value="old('medical_aid_no')" required autofocus />
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
