<?php
 
 namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Mobil extends Model
{
    protected $table = "mobil";
 
    protected $fillable = ['nama_mobil', 'merek', 'model', 'plat'];
}