<?php

declare(strict_types=1);

namespace App\Models\WEDOAPP;

use App\Enums\DTO\PostStatus;
use App\Traits\GetModelByKeyName;
use App\Traits\Seoable;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;
    
    use Seoable;


    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [
        'uuid',


        'is_active',
    ];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [
        'status' => PostStatus::class,
        
        'is_active' => 'boolean',
    ];

    // Relationships

    // Helper Methods
}
