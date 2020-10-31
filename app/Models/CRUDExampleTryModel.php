<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUDExampleTryModel extends Model{
    /*
    || Load 'Eloquent' addon
    */
    use HasFactory;

    /*
    || Database info
    */
    protected $table = 'crud_example_try';
    protected $primaryKey = 'crud_example_try_id';

    /*
    || Database fillable
    */
    protected $fillable = [
        'crud_example_base_id', 'crud_example_try_photo', 'crud_example_try_string', 'crud_example_try_textarea', 'crud_example_try_number',
    ];

    public function tryBelongsTo(){
        return $this->belongsTo('App\Models\CRUDExampleBaseModel', 'crud_example_base_id');
    }
}
