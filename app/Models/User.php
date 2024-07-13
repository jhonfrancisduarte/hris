<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'name',
        'email',
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    public function userData(){
        return $this->hasOne(UserData::class);
    }

    public function admin(){
        return $this->hasOne(Admin::class);
    }

    public function eligibility(){
        return $this->hasMany(Eligibility::class);
    }

    public function workExperience(){
        return $this->hasMany(WorkExperience::class);
    }

    public function employeesChildren(){
        return $this->hasMany(EmployeesChildren::class);
    }

    public function voluntaryWorks(){
        return $this->hasMany(VoluntaryWorks::class);
    }

    public function learningAndDevelopment(){
        return $this->hasMany(LearningAndDevelopment::class);
    }

    public function skills(){
        return $this->hasMany(Skills::class);
    }

    public function hobbies(){
        return $this->hasMany(Hobbies::class);
    }

    public function nonAcadDistinctions(){
        return $this->hasMany(NonAcadDistinctions::class);
    }

    public function assOrgMembership(){
        return $this->hasMany(AssOrgMemberships::class);
    }

    public function charReferences(){
        return $this->hasMany(CharReferences::class);
    }


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
