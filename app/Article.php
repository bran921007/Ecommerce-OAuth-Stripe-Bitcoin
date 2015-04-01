<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{

    //
    protected $table = 'articles';

    protected $fillable = ['title', 'body', 'published_at'];

    //convention: "scope" and the name
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }


    //convention: "set" + name (kamel case si tiene underscore) + Attribute
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }



}
