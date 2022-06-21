<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'agama',
        'nim_nip',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'telepon',
        'jenis_kelamin',
        'foto',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $rules=[
        'name'=>'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idProdi()
    {
        return $this->belongsTo(\App\Models\Prodi::class, 'id_prodi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function berita()
    {
        return $this->hasMany(\App\Models\Beritum::class, 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function jadwals()
    {
        return $this->hasMany(\App\Models\Jadwal::class, 'id_user_dosen');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function khs()
    {
        return $this->hasMany(\App\Models\Kh::class, 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function krs()
    {
        return $this->hasMany(\App\Models\Kr::class, 'id_user_wali');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function kr1s()
    {
        return $this->hasMany(\App\Models\Kr::class, 'id_user_mhs');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function mataKuliahs()
    {
        return $this->hasMany(\App\Models\MataKuliah::class, 'id_user_dosen');
    }
}
