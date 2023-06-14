<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClickStat extends Model
{
    use HasFactory;

    protected $fillable = [
      'shorten_url_id',
      'accessed_at',
      'ip_address',
      'user_agent',
      'referrer',
      'country',
      'region',
      'city',
      'device_type',
      'operating_system',
      'browser',
      'additional_meta',
    ];

    public function shortenUrl(): BelongsTo {
        return $this->belongsTo('shorten_url', 'shorten_url_id', 'id');
    }
}
