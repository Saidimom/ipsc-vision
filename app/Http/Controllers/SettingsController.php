<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CMS;
use App\IncidentType;
use App\Registrar;


class SettingsController extends MainController
{
    //
    public function index(){

        $cmses = CMS::all();
        $incident_types = IncidentType::all();
        $registrars = Registrar::all();
        $data = [
            'cmses' => $cmses,
            'incident_types' => $incident_types,
            'registrars' => $registrars
        ];
        $this->cssFiles = $this->getContent('assets.create.css');
        $this->jsFiles = $this->getContent('assets.create.js');
        $this->content = $this->getContent('settings.index', $data);
        return $this->renderOutput();
    }



}
