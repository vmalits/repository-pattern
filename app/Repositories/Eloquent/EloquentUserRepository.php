<?php
declare(strict_types=1);

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\TopicRepository;

class EloquentUserRepository implements TopicRepository
{

    public function entity(): string
    {
        return User::class;
    }

    public function all()
    {
        return User::all();
    }
}
