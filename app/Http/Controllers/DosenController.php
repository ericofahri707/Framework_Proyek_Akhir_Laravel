<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Post;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dosen::all();
        return view('layouts.dosen.index')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
       unset($data['_token']);
       $nip=@$request->nip;

       if($model=Dosen::find($nip)) {
            $data['updated_at']=date("Y-m-d H:i:s");
            $model->update($data);
       } else
            {
                $model=new Dosen();
                $data['created_at']=date("Y-m-d H:i:s");
                $data['updated_at']=date("Y-m-d H:i:s");
                $model->insert($data);
            }
        return redirect('dosen/create')->with('status', 'Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function read($nip)
    {
        $data = Dosen::find($nip);
        //dd($data);
        return view('layouts.dosen.read', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip)
    {
        $data = Dosen::find($nip);
        $data ->update($request->all());
        return redirect('dosen')->with('status', 'Berhasil di Update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    
     public function delete($nip)
     {
        $data = Dosen::find($nip);
        $data->delete();
        return redirect('dosen')->with('status', 'Berhasil di hapus');
     }
}

