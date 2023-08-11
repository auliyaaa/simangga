<?php

// app/Models/PaguModel.php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_user'; // Ganti dengan nama tabel yang sesuai
    protected $allowedFields = ['nama', 'email', 'password']; // Kolom yang diizinkan untuk diisi
}
