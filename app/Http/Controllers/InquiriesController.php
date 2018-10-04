<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

class InquiriesController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inquiries = Inquiry::all();
        $inquiries->load('incidents');

        //dd($inquiries->where('id', 2)->first()->author);
        $this->cssFiles = $this->getContent('assets.index.css');
        $this->jsFiles = $this->getContent('assets.index.js');

        $this->content = $this->getContent('inquiries.index', ['inquiries' => $inquiries]);
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
        $this->cssFiles = $this->getContent('assets.create.css');
        $this->jsFiles = $this->getContent('assets.create.js');

        $this->content = $this->getContent('inquiries.create');
        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'incidents' => 'required',
        ]);
        if (is_null($request->get('inquiry_id'))){
            $this->validate($request, [
                'title' => 'required|max:255',
            ]);
            $data = $request->only('title', 'text');
            $data['user_id'] = auth()->user()->id;
            $inquiry = Inquiry::create($data);

        } else {
            $inquiry = Inquiry::findOrFail($request->get('inquiry_id'));
        }
        $incidents = $request->get('incidents');
        if ($inquiry){
            $inquiry->incidents()->attach($incidents);
        }
        return redirect(route('inquiries.index'))->with(['status' => 'success']);
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
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->load('incidents');

        $this->cssFiles = $this->getContent('assets.show.css');
        $this->jsFiles = $this->getContent('assets.show.js');

        $this->content = $this->getContent('inquiries.show', ['inquiry' => $inquiry]);
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
        $this->cssFiles = $this->getContent('assets.edit.css');
        $this->jsFiles = $this->getContent('assets.edit.js');

        $this->content = $this->getContent('inquiries.edit');
        return $this->renderOutput();
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
