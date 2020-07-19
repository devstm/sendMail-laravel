<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContacrsController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function edit(Request $req)
    {

        $id1 = $req->input('id1');
        $name1 = $req->input('name1');
        $email1 = $req->input('email1');
        $group1 = $req->input('group1');
        $active1 = $req->input('active1');
        $state1 = $req->input('state1');

        $data1 = array('name' => $name1, 'email' => $email1, 'state' => $state1, 'active' => $active1, 'group' => $group1);
        DB::table('contacrs')->where ('id', $req->id)->update($data1);
        return redirect('/');
    }

    public function viewAll()
    {
        $data['data'] = DB::table('contacrs')->get();
        if (count($data['data']) > 0) {
            return view('contacrs.index', $data);
        } else return view('index');
    }

    public function view()
    {
        return view('contacrs.view');
    }

    public function cr()
    {
        return view('contacrs.creat');
    }
    public function ed(Request $req)
    {
        $model = DB::table('contacrs')->where ('id', $req->id)->first();
        return view('contacrs.edit', compact('model'));
    }

    public function creat(Request $request)

    {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $group = $request->input('group');
        $active = $request->input('active');
        $state = $request->input('state');

        $data = array('id' => $id, 'name' => $name, 'email' => $email, 'state' => $state, 'active' => $active, 'group' => $group);
        DB::table('contacrs')->insert($data);
        $done = "success";
        return redirect('/');
    }
    public function delete($id){
        DB::table('contacrs')->where('id',$id)->delete();
        return redirect('/');

    }


}
