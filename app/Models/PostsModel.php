<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Classes\ImagePath;

class PostsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = "posts";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','category_id','slug','summary','content','featured_image','featured_post','active','user_id'];

    /**
     * Belongs to one relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\PostCategoriesModel','post_category','post_id','category_id');
    }

    /**
     * Accessor that returns an object/instance with path to different sized images.
     *
     * @param $value
     * @return ImagePath
     */

    public function getFeaturedImageAttribute($value)
    {
        return new ImagePath($value);
    }

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    
    public function tags()
    {
        return $this->belongsToMany('App\Models\TagsModel','post_tag','post_id','tag_id');
    }
}
