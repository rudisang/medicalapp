<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternApplicationForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'next_of_kin_name',
        'next_of_kin_surname',
        'next_of_kin_mobile_no',
        'next_of_kin_address',
        'relation_to_kin',
        'level',
        'prog_name',
        'major',
        'institution',
        'date_of_completion',
        'disability',
        'exemption_cert',
        'letter_auth',
        'radp',
        'village',
        'field_of_interest',
        'rel_to_area_of_study',
        'reason',
        'pref_location',
        'competencies',
        'attachments',
        'application_status'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
