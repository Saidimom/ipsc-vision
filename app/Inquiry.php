<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    //
    protected $guarded = ['id'];

    public function author(){
        return $this->belongsTo('App\User','user_id', 'id')->withTrashed();
    }

    public function incidents(){
        return $this->belongsToMany('App\Incident', 'incident_inquiry','inquiry_id','incident_id');
    }

    public function status(){
        return $this->belongsTo('App\InquiryStatus', 'status_id', 'id');
    }



}
