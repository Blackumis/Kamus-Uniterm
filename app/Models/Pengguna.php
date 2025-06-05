<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_Pengguna';
    protected $fillable = ['Nama_Pengguna', 'Username', 'Password'];
    protected $hidden = ['Password'];
}