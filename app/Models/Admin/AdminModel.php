<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_admin';
    protected $fillable = [
        'admin_email',
        'admin_name',
        'admin_password',
    ];
    protected $hidden = [
        'admin_password',
    ];
}