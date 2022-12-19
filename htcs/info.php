<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class info extends Model
{
    public $table = 'info';
    public $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone', 'date'];
    public $incrementing = true;
    public $timestamps = false;
}
