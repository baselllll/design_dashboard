<?php

namespace App\Http\Controllers\dashboard;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =Profile::find(1);
        return  view('dashboard.home.profile',compact('user'));
    }
    public function update($id,Request $request)
    {
        $imageName = $request->file('img')->getClientOriginalName();
        $destination = public_path()."/dashboard/imagesdash";
        $request->file('img')->move($destination, $imageName);
        DB::table('profiles')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'img' => $imageName
            ]);
        return  redirect('dashboard/profile');
    }
}
