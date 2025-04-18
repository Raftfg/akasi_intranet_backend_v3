<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'object',
        'reasons',
        'starting_date',
        'ending_date',
        'duration',
        'piece',
        'status',
        'pdf',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
