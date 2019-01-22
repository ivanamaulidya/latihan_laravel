<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //kasih tau nama tabel
    protected $table = 'customer';

    //laravel defaultnya id
    protected $primaryKey = 'customer_id';

    public $timestamps = false;
    //kasih tau nama atributnya
    protected $fillable = [
      'customer_id',
      'name',
      'address'
    ];

}
