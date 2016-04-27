<?php
/**
 * Created by PhpStorm.
 * User: tomes
 * Date: 4/23/2016
 * Time: 3:29 PM.
 */
namespace Command;

/**
 * Class CreatePostCommand.
 */
class CreatePostCommand
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $content;

    /**
     * CreatePostCommand constructor.
     *
     * @param $title
     * @param $content
     */
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
