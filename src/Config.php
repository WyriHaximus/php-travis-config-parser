<?php declare(strict_types=1);

namespace WyriHaximus\Travis\ConfigParser;

final class Config
{
    public function __construct(array $yaml)
    {
        $this->yaml = $yaml;
    }
}
