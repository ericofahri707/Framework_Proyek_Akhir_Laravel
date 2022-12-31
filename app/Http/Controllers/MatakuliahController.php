<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Post;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Matakuliah::all();
        return view('layouts.matakuliah.index')->with([
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
        return view('layouts.matakuliah.create');
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
       $id=@$request->id;

       if($model=Matakuliah::find($id)) {
            $data['updated_at']=date("Y-m-d H:i:s");
            $model->update($data);
       } else
            {
                $model=new Matakuliah();
                $data['created_at']=date("Y-m-d H:i:s");
                $data['updated_at']=date("Y-m-d H:i:s");
                $model->insert($data);
            }
        return redirect('matakuliah/create')->with('status', 'Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function read($id)
    {
        $data = Matakuliah::find($id);
        //dd($data);
        return view('layouts.matakuliah.read', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Matakuliah::find($id);
        $data ->update($request->all());
        return redirect('matakuliah')->with('status', 'Berhasil di Update');
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
    
     public function delete($id)
     {
        $data = Matakuliah::find($id);
        $data->delete();
        return redirect('matakuliah')->with('status', 'Berhasil di hapus');
     }
}

