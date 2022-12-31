<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Post;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view('layouts.mahasiswa.index')->with([
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
        return view('layouts.mahasiswa.create');
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
       $nim=@$request->nim;

       if($model=Mahasiswa::find($nim)) {
            $data['updated_at']=date("Y-m-d H:i:s");
            $model->update($data);
       } else
            {
                $model=new Mahasiswa();
                $data['created_at']=date("Y-m-d H:i:s");
                $data['updated_at']=date("Y-m-d H:i:s");
                $model->insert($data);
            }
        return redirect('mahasiswa/create')->with('status', 'Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function read($nim)
    {
        $data = Mahasiswa::find($nim);
        //dd($data);
        return view('layouts.mahasiswa.read', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        $data = Mahasiswa::find($nim);
        $data ->update($request->all());
        return redirect('mahasiswa')->with('status', 'Berhasil di Update');
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
    
     public function delete($nim)
     {
        $data = Mahasiswa::find($nim);
        $data->delete();
        return redirect('mahasiswa')->with('status', 'Berhasil di hapus');
     }
}
