<?php

namespace App\Http\Controllers;

use App\CMS;
use App\Http\Requests\IncidentRequest;
use App\Incident;
use App\IncidentType;
use App\Registrar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
use Spatie\Activitylog\Models\Activity;


class IncidentsController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd(12);

        $incidents = Incident::all()->load('cms', 'registrar', 'type', 'inquiries');
        //dd($incidents->first()->inquiries->isEmpty());


        $this->cssFiles = $this->getContent('assets.index.css');
        $this->jsFiles = $this->getContent('assets.index.js');

        $this->content = $this->getContent('incidents.index', ['incidents' => $incidents]);
        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $this->content = $this->getContent('incidents.create', $data);
        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncidentRequest $request)
    {
        //
        $data = $request->except('_token', 'images');
        $data['user_id'] = auth()->user()->id;
        $data['detection_at'] = new Carbon($data['detection_at']);
        if($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                if ($image->isValid()){
                    $screenshotname = str_random(8).'_'.Carbon::now()->format('dmYHi').'_sc.jpg';
                    $screenshot = Image::make($image);
                    $screenshot->save(public_path(env('THEME').'/upload/screenshots/'.$screenshotname));
                    $data['screenshots'][] = $screenshotname;
                }
            }
            $data['screenshots'] = json_encode($data['screenshots']);
        }
        //dd($data);
        $incident = Incident::create($data);
        if ($incident){
            return redirect(route('incidents.index'))->with(['status' => 'success_created']);
        }
        return back()->withErrors(['error' => 'somthing_went_wrong']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //dd('test');
        $incident = Incident::findOrFail($id);

        //dd($incident->inquiries->isEmpty());

        $incident->screenshots = json_decode($incident->screenshots);
        $this->content = $this->getContent('incidents.show', ['incident' => $incident]);
        return $this->renderOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $incident = Incident::findOrFail($id);
        if ($request->get('detach')){
            $incident->inquiries()->detach();
        }
        return back()->with(['status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
