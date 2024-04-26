<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "dateStart",
        "timeStart",
        // "dateEnd",
        "timeEnd",
        "zone_id"
    ];

    public function zone()
    {
        $this->belongsTo(Zone::class);
    }



}
