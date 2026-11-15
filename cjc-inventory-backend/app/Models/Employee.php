<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasUuids;
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'birth_date',
        'age',
        'gender',
        'position',
        'civil_status'
    ];

    public function salesSummaries() {
        return $this->hasMany(SalesSummary::class, 'employee_id');
    }
}
