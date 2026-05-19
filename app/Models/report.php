<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    protected $table = 'report';

    protected $primaryKey = 'report_id';

    protected $fillable = [
        'item_name',		
        'category',
        'description',
        'image',
        'location_found',
        'date_reported',
        'status',
    ];
}
