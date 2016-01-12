<?php
/**
 * Created by PhpStorm.
 * User: kunwar
 * Date: 10/21/15
 * Time: 1:56 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Song extends Eloquent
{

    /**
     * Fillable fields for a song.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'lyrics', 'slug'
    ];

}