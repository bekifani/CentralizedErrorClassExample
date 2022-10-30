<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JornalVoture extends Model
{
    use HasFactory;
    protected $fillable = ['Date', 'debit', 'debit_account', 'credit', 'credit_account', 'Narative'];
    public function debited_account(){
        return $this->belongsTo(Account::class, 'debit_account');
    }
    public function credit_account(){
        return $this->belongsTo(Account::class, 'credit_account');
    }
}
