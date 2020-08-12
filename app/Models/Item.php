<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Item extends Model
{
    use ElasticquentTrait;
    protected $fillable = ['title','description'];

     protected $mappingProperties = array(
       
        'title' => array(
            'type' => 'string',
            'analyzer' => 'standard',
        ),
        'description' => array(
            'type' => 'text',
            'analyzer' => 'standard',
        ),
    );
    // App\Models\Item::addAllToindex();
}
