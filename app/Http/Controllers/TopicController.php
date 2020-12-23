<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;

class TopicController extends Controller
{
    public function __construct(public TopicRepository $topicRepository)
    {
    }

    public function index()
    {
        return $this->topicRepository->all();
    }
}
