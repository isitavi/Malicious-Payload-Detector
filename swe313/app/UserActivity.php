<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
     protected $table = 'user_activities';
     protected $fillable = ['ip','malicious_payload','browser'];
}
