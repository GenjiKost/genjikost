<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
 
use Illuminate\Database\Eloquent\Casts\Attribute;
 
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'no_hp',
        'password',
        'type'
    ];
 
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin"][$value],
        );
    }

    public function transaksis()
    {
        return $this->hasOne(Transaksi::class);
    }
}
