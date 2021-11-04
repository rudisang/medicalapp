<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight">
            {{ __('Dashboard') }} / Internship / Apply
        </h2>
    </x-slot>

    <form method="POST" action="/dashboard/internship/apply" enctype="multipart/form-data">
        @csrf

    

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <fieldset>
                            <legend>Next of Kin</legend>

                            <div class="row mb-4">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Name</label>
                                        <input type="text" name="next_of_kin_name"  class="form-control" placeholder="" required>
                                      </div>
                                      @if ($errors->has('next_of_kin_name'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('next_of_kin_name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Surname</label>
                                        <input type="text" name="next_of_kin_surname"  class="form-control" placeholder="" required>
                                      </div>
                                      @if ($errors->has('next_of_kin_surname'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('next_of_kin_surname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                
                            </div>

                            <div class="row mb-3">
                            

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Mobile #</label>
                                        <input type="number" name="next_of_kin_mobile_no" class="form-control" placeholder="">
                                      </div>
                                      @if ($errors->has('next_of_kin_mobile_no'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('next_of_kin_mobile_no') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Correspondance Address</label>
                                        <input type="text" name="next_of_kin_address" value="" class="form-control" placeholder="">
                                      </div>
                                      @if ($errors->has('next_of_kin_address'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('next_of_kin_address') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <p class="mb-3"></p>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Relationship To Next of Kin</label>
                                        <input type="text" name="relation_to_kin" value="" class="form-control" placeholder="Mother, Father, Guardian...">
                                      </div>
                                      @if ($errors->has('relation_to_kin'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('relation_to_kin') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </fieldset>
                  
                </div>
            </div>
        </div>

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top:-60px">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <fieldset>
                            <legend>Education</legend>

                            <div class="row mb-3">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <select name="level" class="form-select" aria-label="Select Title">
                                        <option selected disabled>Level</option>
                                        <option value="certificate">Certificate</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="degree">Degree</option>
                                      </select>
                                      @if ($errors->has('level'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('level') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Program Name</label>
                                        <input type="text" name="prog_name" value="" class="form-control" placeholder="">
                                      </div>
                                      @if ($errors->has('prog_name'))
                                            <span class="help-block">
                                                <strong style="color:red">{{ $errors->first('prog_name') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Major</label>
                                        <input type="text" name="major" class="form-control" placeholder="">
                                      </div>
                                      @if ($errors->has('major'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('major') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <label  class="form-label">Institution</label>
                                    <select name="institution" class="form-select" aria-label="Select Gender">
                                        <option selected disabled>Select Institution</option>
                                        <option value="Baisago College">Baisago College</option>
                                        <option value="BIUST">BIUST</option>
                                        <option value="Botho University">Botho University</option>
                                        <option value="Buan">Buan</option>
                                        <option value="IDM">IDM</option>
                                        <option value="Limkokwing University">Limkokwing University</option>
                                        <option value="University of Botswana">University of Botswana</option>
                                      </select>
                                      @if ($errors->has('institution'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('institution') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Completion Date</label>
                                        <input type="date" name="date_of_completion" value="" class="form-control" placeholder="">
                                      </div>
                                      @if ($errors->has('date_of_completion'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('date_of_completion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <label  class="form-label">Disability?</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disability" id="inlineCheckbox1" value="Yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disability" id="inlineCheckbox2" value="No">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                      </div>
                                      @if ($errors->has('disability'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('disability') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <label class="mb-2" for="">If Yes Attach Exemption Certificate &amp; Letter Competent Authority</label>
                                    <div class="input-group">
                                        <input type="file" name="exemption_cert" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        <input type="file" name="letter_auth" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                                      </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <label  class="form-label">RADP?</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radp" id="inlineCheckbox1" value="Yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radp" id="inlineCheckbox2" value="No">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                      </div>
                                      @if ($errors->has('radp'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('radp') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                            
                                  
                                        <div class="form-group">
                                            <label  class="form-label">If Yes Name of Village</label>
                                            <input type="text" name="village" value="" class="form-control" placeholder="">
                                          </div>
                            
                                </div>
                            </div>
                        </fieldset>
                  
                </div>
            </div>
        </div>

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top:-60px">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <fieldset>
                            <legend>Interest</legend>

                            <div class="row mb-4">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Field of Interest</label>
                                        <input type="text" name="field_of_interest"  class="form-control" placeholder="">
                                      </div>
                                      @if ($errors->has('field_of_interest'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('field_of_interest') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <label  class="form-label">Is it Related to field of study?</label>
                                    <select name="rel_to_area_of_study" class="form-select" aria-label="Select Gender">
                                        <option selected disabled>Select </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                      </select>
                                      @if ($errors->has('rel_to_area_of_study'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('rel_to_area_of_study') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                            

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Reasons</label>
                                        <input type="text" name="reason" value="" class="form-control" placeholder="">
                                      </div>
                                      @if ($errors->has('reason'))
                        <span class="help-block">
                            <strong style="color:red">{{ $errors->first('reason') }}</strong>
                        </span>
                    @endif
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label  class="form-label">Prefered Location of Service</label>
                                        <input type="text" name="pref_location" value="" class="form-control" placeholder="">
                                      </div>
                                      @if ($errors->has('pref_location'))
                        <span class="help-block">
                            <strong style="color:red">{{ $errors->first('pref_location') }}</strong>
                        </span>
                    @endif
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Key Competencies</label>
                                        <textarea name="competencies" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                      @if ($errors->has('competencies'))
                        <span class="help-block">
                            <strong style="color:red">{{ $errors->first('competencies') }}</strong>
                        </span>
                    @endif
                                </div>
                            </div>
                        </fieldset>
                  
                </div>
            </div>
        </div>

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top:-60px">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <fieldset>
                            <legend>Attachments</legend>

                            <div class="row mb-4">
                                <div class="mb-3">
                                    <div id="preview">
              
                                    </div>
              
                                  <div class="form-group">
                                      <div class="custom-file">
                                        <label class="custom-file-label mb-3" for="customFile">Select Multiple files (only scanned docs in image format)</label><br>
                                          <input id="gallery" type="file" name="attachments[]" accept="image/*" class="custom-file-input" id="customFile" multiple required>
                                          
                                        </div>
                                      @if ($errors->has('attachments'))
                                      <span class="help-block">
                                          <strong style="color:red">{{ $errors->first('attachments') }}</strong>
                                      </span>
                                  @endif
                                    </div>
                                </div>
                            </div>

                           
                        </fieldset>
                  
                </div>
            </div>
        </div>

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top:-60px">
            <div class="">
                <div class="">
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Save &amp; Apply
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to submit?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>This form can only be submitted once, please verify your information before sending your application.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Save changes &amp; Submit</button>
        </div>
      </div>
    </div>
  </div>
                </div>
            </div>
        </div>

    </div>
 
</form>
</x-app-layout>
