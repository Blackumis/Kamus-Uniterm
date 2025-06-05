<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_Admin';
    protected $fillable = ['Nama_Admin', 'Username', 'Password'];
    protected $hidden = ['Password'];
}