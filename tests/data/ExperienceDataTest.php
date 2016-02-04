<?php
namespace bigc\resume\data;

use PHPUnit_Framework_TestCase;

class ExperienceDataTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider additionIdProvider
     */
    public function testUidException($uid)
    {
        $this->setExpectedException('\InvalidArgumentException', "uid must only contain numeric.");
        $obj = ExperienceData::makeExperience(
            $uid,
            null,
            null,
            null,
            null,
            null
        );
    }
    /**
     * @dataProvider additionIdProvider
     */
    public function testExpIdException($expid)
    {
        $this->setExpectedException('\InvalidArgumentException', "expid must only contain numeric.");
        $obj = ExperienceData::makeExperience(
            1,
            $expid,
            null,
            null,
            null,
            null
        );
    }

    /**
     * @dataProvider additionStringProvider
     */
    public function testFirmNameException($value)
    {
        $this->setExpectedException(
            '\InvalidArgumentException',
            "firmName must only string and length between 1 and 32."
        );
        
        $obj = ExperienceData::makeExperience(
            1,
            1,
            $value,
            null,
            null,
            null
        );
    }

    /**
     * @dataProvider additionInitProvider
     */
    public function testInitDataObject(
        $uid,
        $expid,
        $firmName,
        $indCatNo,
        $jobName,
        $areaNo
    ) {
        $obj = ExperienceData::makeExperience(
            $uid,
            $expid,
            $firmName,
            $indCatNo,
            $jobName,
            $areaNo
        );

        if ($expid === null) {
            $this->setExpectedException('\InvalidArgumentException', "expid must only contain numeric.");
            $obj->checkData();
        }
    }

    public function additionIdProvider()
    {
        return [
            ["a"],
            [""],
        ];
    }

    public function additionStringProvider()
    {
        return [
            [""],
            ["abcdefghijklmnopqrstuvwxyz1234561"],
            ["中文中文中文中文中文中文中文中文中文中文中文中文中文中文中文123"]
        ];
    }

    public function additionInitProvider()
    {
        return [
            [
                1,
                1,
                '1什麼都做公司',
                '1網際網路類',
                '1BE工程師',
                '1亞洲'
            ],
            [
                1,
                null,
                '1什麼都做公司',
                '1網際網路類',
                '1BE工程師',
                '1亞洲'
            ]
        ];
    }
}
