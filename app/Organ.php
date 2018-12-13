<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organ extends Model
{
    protected $fillable = [
        'organ_name_uz',
        'organ_name_en',
        'organ_name_ru',
        'organ_name_cyrl',
        'address_uz',
        'address_en',
        'address_ru',
        'address_cryl',
        'ghazna_name_uz',
        'ghazna_name_en',
        'ghazna_name_ru',
        'ghazna_name_cyrl',
        'bank_name_uz',
        'bank_name_en',
        'bank_name_ru',
        'bank_name_cyrl',
        'organ_photo',
        'phone_number',
        'fax_number',
        'email',
        'SH_X_V',
        'stir_number',
        'x_r',
        'banks_code',
        'exat_standart_uz',
    ];
    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
