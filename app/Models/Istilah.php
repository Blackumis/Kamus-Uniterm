<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Istilah extends Model
{
    use HasFactory;

    protected $table = 'istilah'; // Tentukan nama tabel sesuai dengan database
    protected $primaryKey = 'ID_Istilah';
    protected $fillable = ['Nama_Istilah', 'Kategori_Istilah', 'Detail_Istilah'];
}