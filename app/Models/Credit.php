<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function branches(){
        return $this->belongsTo(Branches::class, 'branches_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
