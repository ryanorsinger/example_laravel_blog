<?php

class Post extends BaseModel
{

    protected $table = 'posts';

    /**
    * Validation rules
    */
    public static $rules = array(
        'title'      => 'required|max:100',
        'body'       => 'required|max:10000'
    );

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function images()
    {
        return $this->hasMany('Image');
    }
}
