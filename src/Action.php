<?php declare(strict_types=1);

namespace WyriHaximus\Travis\ConfigParser;

final class Action
{
    /**
     * @var string
     */
    private $action;

    public function __construct(string $action)
    {
        $this->action = $action;
    }

    public function __toString(): string
    {
        return $this->action;
    }
}
