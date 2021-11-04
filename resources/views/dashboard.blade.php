<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
