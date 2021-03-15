<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApiKeys extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['api_key'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeByUser($query)
    {
        return $query->where('user_id', auth()->id());
    }
}
