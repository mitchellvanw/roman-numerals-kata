<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
    function it_returns_an_empty_sting_for_0()
    {
        $this->fromArabic(0)->shouldReturn('');
    }

    function it_creates_I_from_1()
    {
        $this->fromArabic(1)->shouldReturn('I');
    }

    function it_creates_II_from_2()
    {
        $this->fromArabic(2)->shouldReturn('II');
    }

    function it_creates_III_from_3()
    {
        $this->fromArabic(3)->shouldReturn('III');
    }

    function it_creates_IV_from_4()
    {
        $this->fromArabic(4)->shouldReturn('IV');
    }

    function it_creates_V_from_5()
    {
        $this->fromArabic(5)->shouldReturn('V');
    }

    function it_creates_VI_from_6()
    {
        $this->fromArabic(6)->shouldReturn('VI');
    }

    function it_creates_X_from_10()
    {
        $this->fromArabic(10)->shouldReturn('X');
    }

    function it_creates_XX_from_20()
    {
        $this->fromArabic(20)->shouldReturn('XX');
    }

    function it_creates_the_roman_equivalent_of_any_digit()
    {
        $this->fromArabic(2465)->shouldReturn('MMCDLXV');
        $this->fromArabic(4999)->shouldReturn('MMMMCMXCIX');
    }
}
