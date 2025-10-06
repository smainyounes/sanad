<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = "admin";

    protected $fillable = ['name', 'email', 'password', 'admin_type', 'can_login', 'phone'];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**FunctionName
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function getDefaultGuardName(): string { return 'admin'; }

    /**
     * Generate a unique invitation token and set expiration time.
     *
     * @return void
     */
    public function generateInvitationToken()
    {
        $this->invitation_token = Str::random(60);
        $this->invitation_expires_at = now()->addDays(7); // Token expires in 7 days
        $this->save();
    }

    /**
     * Check if the invitation token is valid.
     *
     * @return bool
     */
    public function isInvitationValid()
    {
        return $this->invitation_expires_at && now()->lessThanOrEqualTo($this->invitation_expires_at);
    }

    /**
     * Clear invitation token after the password has been set.
     *
     * @return void
     */
    public function clearInvitation()
    {
        $this->invitation_token = null;
        $this->invitation_expires_at = null;
        $this->save();
    }
}
