<?php

namespace hyperia\helpers\tests;

use hyperia\helpers\StringHelper;
use PHPUnit\Framework\TestCase;

/**
 * @covers StringHelper
 */
final class StringHelperTest extends TestCase
{
    /**
     * @dataProvider  containsProvider
     */
    public function testContains($needle, $haystack)
    {
        $this->assertTrue(StringHelper::contains($needle, $haystack));
    }

    public function containsProvider()
    {
        return [
            ['are', 'assertions are implemented'],
            ['čš', '123ľéíáčš']
        ];
    }

    /**
     * @dataProvider doesNotContainProvider
     */
    public function testDoesNotContain($needle, $haystack)
    {
        $this->assertFalse(StringHelper::contains($needle, $haystack));
    }

    public function doesNotContainProvider()
    {
        return [
            ['is', 'assertions are implemented'],
            ['čš', '123ľéíács'],
        ];
    }

    /**
     * @dataProvider longerStringProvider
     */
    public function testIsLongerFunctionWithLongerString($test_string, $number)
    {
        $this->assertTrue(StringHelper::isLonger($test_string, $number));
    }

    /**
     * @dataProvider shorterStringProvider
     */
    public function testIsLongerFunctionWithShorterString($test_string, $number)
    {
        $this->assertFalse(StringHelper::isLonger($test_string, $number));
    }

    /**
     * @dataProvider equalStringProvider
     */
    public function testIsLongerFunctionWithEqualString($test_string, $number)
    {
        $this->assertFalse(StringHelper::isLonger($test_string, $number));
    }

    /**
     * @dataProvider longerStringProvider
     */
    public function testIsShorterFunctionWithLongerString($test_string, $number)
    {
        $this->assertFalse(StringHelper::isShorter($test_string, $number));
    }

    /**
     * @dataProvider shorterStringProvider
     */
    public function testIsShorterFunctionWithShorterString($test_string, $number)
    {
        $this->assertTrue(StringHelper::isShorter($test_string, $number));
    }

    /**
     * @dataProvider equalStringProvider
     */
    public function testIsShorterFunctionWithEqualString($test_string, $number)
    {
        $this->assertFalse(StringHelper::isShorter($test_string, $number));
    }

    public function equalStringProvider()
    {
        return [
            ['ľčŤôĽÁrT45kl', 12]
        ];
    }

    public function shorterStringProvider()
    {
        return [
            ['žčŤýč.,PrTk+', 15]
        ];
    }

    public function longerStringProvider()
    {
        return [
            ['ščŤýĽÁrT4569', 5]
        ];
    }

    /**
     * @dataProvider testStringProvider
     */
    public function testLength($test_string)
    {
        $this->assertEquals(12, StringHelper::length($test_string));
    }

    /**
     * @dataProvider testStringProvider
     */
    public function testToLower($test_string)
    {
        $this->assertEquals('ščťýľárt4569', StringHelper::toLower($test_string));
    }

    /**
     * @dataProvider testStringProvider
     */
    public function testToUpper($test_string)
    {
        $this->assertEquals('ŠČŤÝĽÁRT4569', StringHelper::toUpper($test_string));
    }

    /**
     * @dataProvider testStringProvider
     */
    public function testFirstCharToUpper($test_string)
    {
        $this->assertEquals('ŠčŤýĽÁrT4569', StringHelper::firstCharToUpper($test_string));
    }

    public function testStringProvider()
    {
        return [
            ['ščŤýĽÁrT4569']
        ];
    }

    /**
     * @dataProvider accentProvider
     */
    public function testRemoveAccent($test, $expected)
    {
        $this->assertEquals($expected, StringHelper::removeAccent($test));
    }

    public function accentProvider()
    {
        return [
            [0123, octdec('0123')],
            ['0123', '0123'],
            [null, ''],
            ['ščťžýáíéľ', 'sctzyaiel'],
            ['Ħí ŧħə®ë, юßť å test!', 'Hi there, jusst a test!']
        ];
    }
}