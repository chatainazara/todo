<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

        protected $fillable =[
            'content',
            'category_id',
        ];

        public function category2(){
            return $this->belongsTo('App\Models\Category','category_id','id');
          }

}
