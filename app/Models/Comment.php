<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $guarded=[];

        public function Post(){
            return $this->belongsTo(Post::class);
        }
        
        public function User(){
            return $this->belongsTo(User::class);
        }
}
