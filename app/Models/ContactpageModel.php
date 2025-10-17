<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactpageModel extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'firstname',
        'lastname',
        'number',
        'role',
        'message',
    ];

}
