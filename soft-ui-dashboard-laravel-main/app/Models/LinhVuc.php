<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinhVuc extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'linh_vucs';
    protected $primaryKey = 'id';
    protected $fillable = ['tenlv','trangthai'];

}
