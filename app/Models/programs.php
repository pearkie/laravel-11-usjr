<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programs extends Model
{
    use HasFactory;

    protected $fillable = ['progfullname', 'progshortname', 'progcollid', 'progcolldeptid'];

    public function colleges()
    {
        return $this->belongsTo(colleges::class, 'progcollid');
    }

    public function departments()
    {
        return $this->belongsTo(departments::class, 'progcolldeptid');
    }

    public function students()
    {
        return $this->hasMany(students::class, 'studprogid');
    }
}
