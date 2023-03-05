<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string, timestamp>
     */
    protected $fillable = [
        'id',
        'project_id',
        'priority',
        'name',
        'completed-date',
        'created-date',
    ];
}
