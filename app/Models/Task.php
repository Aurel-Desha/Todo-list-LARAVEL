<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = 'tasks';
    use HasFactory;
    protected $fillable = ['name', 'complet'];


    public function isCompleted () {
        return $this->complet == true;
    }
}
