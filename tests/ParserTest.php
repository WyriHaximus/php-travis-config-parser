<?php declare(strict_types=1);

namespace WyriHaximus\Tests\Travis\ConfigParser;

use PHPUnit\Framework\TestCase;
use WyriHaximus\Travis\ConfigParser\Config;
use WyriHaximus\Travis\ConfigParser\Parser;

final class ParserTest extends TestCase
{
    public function testParse()
    {
        $contents = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'test.travis.yml');

        $config = Parser::parse($contents);

        self::assertInstanceOf(Config::class, $config);
    }
}
