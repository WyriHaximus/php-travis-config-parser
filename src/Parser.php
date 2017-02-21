<?php declare(strict_types=1);

namespace WyriHaximus\Travis\ConfigParser;

use Symfony\Component\Yaml\Yaml;

final class Parser
{
    public static function parse(string $contents): Config
    {
        return new Config(Yaml::parse($contents));
    }
}
