<?php

namespace App\Http\Controllers;

use Broadway\CommandHandling\SimpleCommandBus;
use Command\CreatePostCommand;
use Command\CreatePostCommandHandler;

/**
 * Class PostController.
 */
class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return \View::make('post.create');
    }

    /**
     * @throws \Exception
     */
    public function store()
    {
        $handler = new CreatePostCommandHandler();

        $commandBus = new SimpleCommandBus();
        $commandBus->subscribe($handler);

        $command = new CreatePostCommand('Post Title', 'Post Content');
        $commandBus->dispatch($command);
    }
}
