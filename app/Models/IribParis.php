<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class IribParis extends Model
{
    use Searchable;

    protected $primaryKey = 'id';
    protected $table = 'irib_paris';
    public $timestamps = false;

    public $asYouType = true;

    protected $fillable = ['global_id', 'item_id', 'title', 'date', 'date_shamsi', 'report', 'rush', 'monitoring', 'sent', 'description'];

    public function searchableAs() {
    	return "iribParis_index";
    }

    public function toSearchableArray() {
    	$array = $this->toArray();
    	return $array;
    }
}
