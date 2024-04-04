<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Data Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                <div class="card">
                    <div class="card-header">
                        <button type="button " class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'" >
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
                        </button>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('store') }}">
                            @csrf
                            <div class="row mb-2">
                                <label for="txtid" class="col-sm-2 col-form-label">ID Students</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control form-control-sm" id="txtid" name="txtid" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="txtfullname" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-sm" id="txtfullname" name="txtfullname" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-2">
                                  <select class="form-select form-select-sm" name="txtgender" id="txtgender" required>
                                    <option value="" selected>Choose</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-sm" id="txtemail" name="txtemail" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control form-control-sm" id="txtphone" name="txtphone" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control form-control-sm" name="txtaddress" id="txtaddress" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-sm btn-warning bg-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i>   Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>