<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternApplicationForm;
class InternApplicationFormController extends Controller
{
    public function storeInternApplication(Request $request){

        $request->validate([
        'next_of_kin_name' => 'required|string|max:255',
        'next_of_kin_surname' => 'required|string|max:255',
        'next_of_kin_mobile_no' => 'required|string|max:255',
        'next_of_kin_address' => 'required|string|max:255',
        'relation_to_kin' => 'required|string|max:255',
        'level' => 'required|string|max:255',
        'prog_name' => 'required|string|max:255',
        'major' => 'required|string|max:255',
        'institution' => 'required|string|max:255',
        'date_of_completion' => 'required|date|before:today',
        'disability' => 'required|string|max:255',
        'exemption_cert',
        'letter_auth',
        'radp' => 'required|string|max:255',
        'village',
        'field_of_interest' => 'required|string|max:255',
        'rel_to_area_of_study' => 'required|string|max:255',
        'reason' => 'required',
        'pref_location' => 'required|string|max:255',
        'competencies'=> 'required',
        'attachments' => 'required',
        ]);

     
        $attachments = array();

        if($request->hasFile('attachments')){
            foreach($request->attachments as $image){
                
                array_push($attachments, $image->getClientOriginalName().time().'.'.$image->extension());
                $image->move(public_path('attachments'), $image->getClientOriginalName().time().'.'.$image->extension());
            }
        }

        $docs = json_encode($attachments);

        $application = new InternApplicationForm;

        $application->user_id = auth()->user()->id;

        $application->attachments = $docs;

        $application->next_of_kin_name = $request->next_of_kin_name;
        $application->next_of_kin_surname = $request->next_of_kin_surname;
        $application->next_of_kin_mobile_no = $request->next_of_kin_mobile_no;
        $application->next_of_kin_address = $request->next_of_kin_address;
        $application->relation_to_kin = $request->relation_to_kin;
        $application->level = $request->level;
        $application->prog_name = $request->prog_name;
        $application->major = $request->major;
        $application->institution = $request->institution;
        $application->date_of_completion = $request->date_of_completion;
        $application->disability = $request->disability;
        
        $application->radp = $request->radp;
        $application->field_of_interest = $request->field_of_interest;
        $application->rel_to_area_of_study = $request->rel_to_area_of_study;
        $application->reason = $request->reason;
        $application->pref_location = $request->pref_location;
        $application->competencies = $request->competencies;

        $application->application_status = 0;
        

        $application->save();

        return redirect('/dashboard')->with('success', 'Application submitted');

    }
}
