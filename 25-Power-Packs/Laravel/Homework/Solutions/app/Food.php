<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /*
	 * Attributes that are mass-assignable.
     */
    protected $fillable = ['name', 'protein', 'carbohydrates', 'fat'];

    public function meal()
    {
    	return $this->belongsTo(Meal::class);
    }

    /*
     * Returns the total number of calories in this food.
     *
     * Calculates total based on the following equivalences:
     *
     *	 1g Protein 	  => 4 calories
     *	 1g Carbohydrates => 4 calories
     *	 1g Fat      	  => 9 calories
     */
    public function calories()
    {
    	return (($this->protein * 4) + ($this->carbohydrates * 4) + ($this->fat * 9));
    }
}
