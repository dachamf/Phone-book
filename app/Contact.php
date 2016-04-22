<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * Fildable fields.
     *
     * @var array
     */
    protected $fildable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'address',
        'comment',

    ];

    public $timestamps = false;
    protected $table = 'contacts';

}
