<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class komponenGaji extends Model
{
    use SoftDeletes;
    protected $table = 'master_komponen_gaji';
}
