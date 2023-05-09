<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiLaTrieuPhu extends Model
{


    use HasFactory;

    protected $table = 'ai_la_trieu_phus';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['category','question','correct_answer','incorrect_1','incorrect_2','incorrect_3'];
    // protected $guarded=[];
}
