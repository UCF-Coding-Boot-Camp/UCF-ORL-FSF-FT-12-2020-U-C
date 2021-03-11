<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
  // Get the user this snippet belongs to
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
