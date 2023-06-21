<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ClickStat
 *
 * @property int $id
 * @property int $shortened_url_id
 * @property string $accessed_at
 * @property string $ip_address
 * @property string $user_agent
 * @property string|null $referrer
 * @property string $country
 * @property string|null $region
 * @property string|null $city
 * @property string $device_type
 * @property string $operating_system
 * @property string|null $browser
 * @property string|null $additional_meta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereAccessedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereAdditionalMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereBrowser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereDeviceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereOperatingSystem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereReferrer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereShortenedUrlId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClickStat whereUserAgent($value)
 */
	class ClickStat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $identifier
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShortenUrl
 *
 * @property-read \App\Models\User|null $createdBy
 * @property-read \App\Models\User|null $updatedBy
 * @method static \Illuminate\Database\Eloquent\Builder|ShortenUrl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortenUrl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortenUrl query()
 */
	class ShortenUrl extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string $is_active
 * @property int $role_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Role $role
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserActivity
 *
 * @property int $id
 * @property string $message
 * @property int $created_by
 * @property \Illuminate\Support\Carbon $created_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereMessage($value)
 */
	class UserActivity extends \Eloquent {}
}

