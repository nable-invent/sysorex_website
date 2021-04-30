<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_contact';
    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone',
        'contact_subject',
        'contact_message',
        'created_at',
        'updated_at',
    ];
}
