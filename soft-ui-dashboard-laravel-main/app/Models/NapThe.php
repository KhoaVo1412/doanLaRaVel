<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NapThe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'nap_thes';
    protected $primaryKey = 'id';
    protected $fillable = ['loaithe','menhgia','mathe','trangthai'];

}
