<?php

namespace App\Models\Cooperator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thrift extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_by',
        'closed_by',
        'reopened_by',
        'fname',
        'midname',
        'lname',
        'email',
        'phone',
        'profile_image',
        'description',
        'status',
        'reopen_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
