<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use softDeletes;


    public $table = 'task';

    protected $fillable = [
        'description',
    ];

    public function isCompleted(){
        return $this->completed_at!==null;

    }
    public function completed(){
         $this->completed_at!==null;
         return true;

    }


}
