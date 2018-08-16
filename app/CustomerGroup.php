<?php

namespace App;

use Moloquent;
use DB;

use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Moloquent
{

      protected $collection = 'customer_groups';
      protected $primaryKey = '_id';
      protected $fillable = [
            'name','type','addcheckboxgroup'
      ];

}

