<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    use HasFactory;

    protected $fillable = ['deptfullname', 'deptshortname', 'deptcollid'];

    public function colleges()
    {
        return $this->belongsTo(colleges::class, 'deptcollid', 'collid');
    }
}
