<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model {
    protected $table = 'patients';
    protected $fillable = ['name', 'phone', 'email', 'address'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id');
    }
}