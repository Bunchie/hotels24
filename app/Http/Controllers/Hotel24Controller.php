<?php
/**
 * Created by PhpStorm.
 * User: ziberman
 * Date: 21.10.17
 * Time: 1:13
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class Hotel24Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        App::setLocale($locale);
        return view('hostel24');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $locale)
    {
        App::setLocale($locale);

        $status = 500;

        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required',
        ]);

        if ($request->input('username') == 'Anna' && $request->input('password') == 11111) {
            Lang::get('hostel24.hello', array(), 'en');
            Session::flash('message', Lang::get('hotel24.login_success'));
            Session::flash('alert-class', 'alert-success');
            $status = 200;
        } elseif ($request->input('username') == '500' && $request->input('password') == 500) {
            Session::flash('message', Lang::get('hotel24.login_error'));
            Session::flash('alert-class', 'alert-danger');
            $status = 400;
        } else {
            Session::flash('message', Lang::get('hotel24.login_warning'));
            Session::flash('alert-class', 'alert-warning');
            $status = 400;
        }

        return response()->view('hostel24', [], $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}