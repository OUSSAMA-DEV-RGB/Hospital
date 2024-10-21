<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Specify the table name if it's not 'doctors'
    protected $table = 'doctors';

    // Define which attributes are mass assignable
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'room',
        'speciality',
        'image',
    ];
    
}
