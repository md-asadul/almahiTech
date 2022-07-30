<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use SoftDeletes, HasFactory, Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'post_category_id',
        'cover_image',
        'cover_image_sm',
        'cover_image_md',
        'description',
        'created_by',
        'updated_by'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'id']
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo('App\Models\PostCategory', 'post_category_id');
    }
}
