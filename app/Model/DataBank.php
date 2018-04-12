<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataBank extends Model
{
    use SoftDeletes;
    protected $table = 'master_bank';
}
