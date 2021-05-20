<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    use HasFactory;
    
    // protected $table = 'tasks';

    // protected $primaryKey = 'id';

    protected $fillable = [
        'employee_id',
        'task',
        'deadline',
    ];

    public function userTask()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
}
