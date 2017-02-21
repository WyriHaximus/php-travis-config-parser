<?php declare(strict_types=1);

namespace WyriHaximus\Tests\Travis\ConfigParser;

use PHPUnit\Framework\TestCase;
use WyriHaximus\Travis\ConfigParser\Action;
use WyriHaximus\Travis\ConfigParser\Config;
use WyriHaximus\Travis\ConfigParser\Parser;

final class ActionTest extends TestCase
{
    public function testAction()
    {
        $composer = 'composer install';
        $action = new Action($composer);
        self::assertSame($composer, (string)$action);
    }
}
