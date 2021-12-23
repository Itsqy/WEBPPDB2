<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $user = User::all();
        return view('content.guru.index', compact('user', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.guru.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [

            'name' => 'min:3',
            'email' => 'min:3',
            'Role' => 'min:3',
            'password' => 'min:3',
        ]);

        if ($validator->fails()) {
            return back()->withInput();
        }
        $input['password'] = password_hash($request->input('password'), PASSWORD_DEFAULT);
        User::create($input);
        return redirect('/guru');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);

        return view('content.guru.edit', compact('user'));
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
        $user = User::find($id);
        $input = $request->all();
        $validator = Validator::make($input, [

            'name' => 'min:3',
            'email' => 'min:3',
            'Role' => 'min:3',
            'password' => 'min:3',
        ]);

        if ($validator->fails()) {
            return back()->withInput();
        }

        if ($request->input('password')) {
            $input['password'] = password_hash($request->input('password'), PASSWORD_DEFAULT);
        } else {
            $input = Arr::except($input, ['password']);
        }

        $user->update($input);
        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
