<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class LuotChoi extends Model
{
    // use HasFactory;
    // use softDeletes;
    // protected $guarded=[];


    // public function nguoichoi(){
    //     return $this->belongsTo(NguoiChoi::class);
    // }
    use HasFactory;
    public $timestamps = false;
    protected $table = 'luot_chois';
    protected $primaryKey = 'id';
    protected $fillable = ['idNC','idLV','TG','diem'];
}
