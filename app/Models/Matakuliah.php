<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
protected $table = "matakuliah";
protected $primaryKey= "id";
public $incrementing=false;
protected $keyType="string";

protected $fillable=['id','kode','nama','sks','semester','created_at','updated_at'];
}
