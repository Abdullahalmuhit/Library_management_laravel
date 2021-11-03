<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{

  protected $primarykey = 'bookId';

    public function category(){
      return $this->belongsTo(booksCategory::class, 'catId', 'catId')->withDefault();
    }
    public function authors(){
      return $this->belongsTo(authors::class,'authId', 'authId')->withDefault();
    }
    public function bookIssues(){
      return $this->hasMany(booksIssued::class,'bookId', 'bookId');
    }

    public function author(){
      return $this->belongsTo('authors');
    }
}
