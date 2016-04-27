<?php
/**
 * Created by PhpStorm.
 * User: tomes
 * Date: 4/23/2016
 * Time: 4:53 PM.
 */
namespace Command;

use Broadway\CommandHandling\CommandHandler;

/**
 * Class CreatePostCommandHandler.
 */
class CreatePostCommandHandler extends CommandHandler
{
    /**
     * @param CreatePostCommand $createPostCommand
     */
    public function handleCreatePostCommand(CreatePostCommand $createPostCommand)
    {
        echo $createPostCommand->getTitle();
        echo $createPostCommand->getContent();
    }
}
