<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
  // Get the user this snippet belongs to
  public function user()
  {
    $this->belongsTo(User::class);
  }
}
