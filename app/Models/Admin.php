<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    App\Models\User::create(['name']=>'summer',['email']=>'dssf@qq.com')
}
