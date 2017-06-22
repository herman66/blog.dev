<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    protected $fillable = ['title', 'fulltext'];//白名單
    //protected $guarded = ['is_admin']; //黑名單

    use SoftDeletes;

    protected $dates = ["deleted_at"];

//一對一
    public function user() {
        return $this->belongsTo('App\User');
    }

//一對多
    public function users() {
        return $this->belongsTo('App\User');
    } 

//多型
    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

//多型多對多
    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }

}
