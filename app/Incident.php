<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Incident extends Model
{
    //
    use LogsActivity;

    protected $guarded = ['id'];

    protected static $logAttributes = ['url'];

    protected $dates = [
        'created_at',
        'updated_at',
        'detection_at'
    ];

    public function author(){
        return $this->belongsTo('App\User', 'user_id', 'id')->withTrashed();
    }

    public function cms(){
        return $this->belongsTo('App\CMS', 'cms_id', 'id');
    }

    public function registrar(){
        return $this->belongsTo('App\Registrar', 'registrar_id', 'id');
    }

    public function type(){
        return $this->belongsTo('App\IncidentType', 'type_id', 'id');
    }

    public function inquiries(){
        return $this->belongsToMany('App\Inquiry', 'incident_inquiry', 'incident_id', 'inquiry_id');
    }


}
