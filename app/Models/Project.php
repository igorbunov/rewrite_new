<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'text',
        'is_working_now',
        'working_minutes'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keywords()
    {
        return $this->hasMany(ProjectKeyword::class);
    }

    public function getWorkingHoursAttribute()
    {
        $hours = number_format($this->working_minutes / 60, 2);

        $exploded = explode('.', $hours);

        return $exploded[0] . ':' . intval($exploded[1] * 60 / 100);
    }
}
