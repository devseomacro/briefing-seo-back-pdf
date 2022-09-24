<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorePdf extends Model
{
    protected $table = 'table_pdf_value';

    protected $fillable = ['pdf'];
}

