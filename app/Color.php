<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    /**
     * Array of fillable fields
     *
     * @var array
     */
    protected $fillable = ['mouline','coton','rayonne','retors','laine','medicis','broder'];

    public $timestamps = false;
}
