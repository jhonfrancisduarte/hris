<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;

    protected $table = 'leave_application';

    protected $fillable = [
        'user_id',
        'name',
        'office_or_department',
        'date_of_filing',
        'position',
        'salary',
        'type_of_leave',
        'details_of_leave',
        'number_of_days',
        'start_date',
        'end_date',
        'commutation',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userData()
    {
        return $this->belongsTo(UserData::class);
    }
}