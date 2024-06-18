<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    protected $primaryKey = 'studid';

    protected $fillable = ['studfirstname', 'studlastname', 'studmidname', 'studprogid', 'studcollid', 'studyear'];

    public function colleges()
    {
        return $this->belongsTo(colleges::class, 'studcollid', 'collid');
    }

    public function programs()
    {
        return $this->belongsTo(programs::class, 'studprogid', 'progid');
    }
}
