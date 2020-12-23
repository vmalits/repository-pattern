<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Repositories\Contracts\TopicRepository;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function __construct(public TopicRepository $topicRepository)
    {
    }

    public function index()
    {
        dd($this->topicRepository->all());
    }
}
