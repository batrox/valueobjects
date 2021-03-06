<?php

namespace ValueObjects\Tests\Geography;

use ValueObjects\Geography\CountryCode;
use ValueObjects\Geography\CountryCodeName;
use ValueObjects\String\String;
use ValueObjects\Tests\TestCase;

class CountryCodeNameTest extends TestCase
{
    public function testGetName()
    {
        $code = CountryCode::IT();
        $name = CountryCodeName::getName($code);
        $expectedString = new String('Italy');

        $this->assertTrue($name->sameValueAs($expectedString));
    }
}
