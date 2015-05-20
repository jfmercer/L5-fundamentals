<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    // This avoids the MassAssignmentException, which is thrown to
    // protect the DB
	protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

}
