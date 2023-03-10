<?php

namespace App\Http\Controllers;

use App\Traits\Network\NoticeNetwork;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    use NoticeNetwork;
    /* Display a listing of the resource.*/
    public function index()
    {
        try {
            $notices = $this->NoticeList();
            return view('modules.notice.index', compact('notices'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('modules.notice.createUpdate');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->NoticeStore($request);
            return redirect()->route('notice.index')->with('success', "Notice Created.");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $show = $this->NoticeFindById($id);
            return view('modules.notice.show', compact('show'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $edit = $this->NoticeFindById($id);
            return view('modules.notice.createUpdate', compact('edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
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
        try {
            $this->NoticeUpdate($request, $id);
            return redirect()->route('notice.index')->with('success', "Notice updated.");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->NoticeFindById($id)->delete();
            return back()->with('success', "Notice deleted.");
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
