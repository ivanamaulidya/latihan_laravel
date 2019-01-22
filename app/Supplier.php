<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  //kasih tau nama tabel
  protected $table = 'supplier';

  public $timestamps = false;
  //kasih tau nama atributnya
  protected $fillable = [
    'supplier_id',
    'supplier_name',
    'supplier_address'
  ];
}
