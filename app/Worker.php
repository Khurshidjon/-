<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = [
        'organ_id',
        'rank_id',
        'name_uz',
        'worker_name_uz',
        'worker_name_en',
        'worker_name_ru',
        'worker_name_cyrl',
        'commitment_uz',
        'commitment_en',
        'commitment_ru',
        'commitment_cyrl',
        'biography_uz',
        'biography_en',
        'biography_ru',
        'biography_cyrl',
        'work_address_uz',
        'work_address_en',
        'work_address_ru',
        'work_address_cyrl',
        'worker_photo',
        'worker_photo',
        'phone_number',
        'fax_number',
        'organ_id',
        'rank_id',
        'worker_creator_organ',
        'worker_email',

    ];
}
