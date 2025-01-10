<?php

namespace App\Models;


use App\Traits\Routable;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory, Routable;

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function firstLesson(): HasOne
    {
        return $this->lessons()->one()->ofMany('number', 'min')->limit(1) ;
    }

    protected function formattedLength(): Attribute
    {
        return Attribute::make(
            get: function () {
                $interval = CarbonInterval::seconds($this->length ?? $this->lessons->sum('length'))->cascade()->toArray();

                $hours = $interval['hours'] ? "{$interval['hours']}h" :  '';
                $minutes = $interval['minutes'] ? "{$interval['minutes']}min" :  '';

                return trim($hours . " " . $minutes);
            }
        );
    }
}

