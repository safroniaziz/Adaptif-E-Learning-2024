<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RubrikPenilaian extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the indikatorPenilaians for the RubrikPenilaian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indikatorPenilaians(): HasMany
    {
        return $this->hasMany(IndikatorPenilaian::class, 'rubrik_penilaian_id', 'id');
    }
}
