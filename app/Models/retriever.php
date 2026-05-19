<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class retriever extends Model
{
    protected $table = 'retriever';

    protected $primaryKey = 'retriever_id';

    protected $fillable = [
        'first_name',		
        'middle_name',
        'last_name',
        'email',
        'contact_no',
        'person_id',
        'proof_image',
        'proof_text',
    ];
}
