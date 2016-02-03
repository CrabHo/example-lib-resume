<?php
namespace bigc\resume\data;

use PHPUnit_Framework_TestCase;

class EducationDataTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider additionIdProvider
     */
    public function testUidException($uid)
    {
        $this->setExpectedException('\InvalidArgumentException', "uid must only contain numeric.");
        $obj = EducationData::makeEducation(
            $uid,
            null,
            null,
            null,
            null,
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
    public function testEduIdException($eduId)
    {
        $this->setExpectedException('\InvalidArgumentException', "eduid must only contain numeric.");
        $obj = EducationData::makeEducation(
            1,
            $eduId,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
        );
    }

    /**
     * @dataProvider additionStringProvider
     */
    public function testSchoolNameException($value)
    {
        $this->setExpectedException(
            '\InvalidArgumentException',
            "schoolName must only string and length between 1 and 32."
        );
        
        $obj = EducationData::makeEducation(
            1,
            1,
            $value,
            null,
            null,
            null,
            null,
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
        $eduid,
        $schoolName,
        $majorName,
        $majorCat,
        $area,
        $schoolCountry,
        $startDate,
        $endDate,
        $degreeStatus
    ) {
        $obj = EducationData::makeEducation(
            $uid,
            $eduid,
            $schoolName,
            $majorName,
            $majorCat,
            $area,
            $schoolCountry,
            $startDate,
            $endDate,
            $degreeStatus
        );

        if ($eduid === null) {
            $this->setExpectedException('\InvalidArgumentException', "eduid must only contain numeric.");
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
                2,
                "schoolName",
                "majorName",
                "majorCat",
                "area",
                "schoolCountry",
                "2011-12",
                "2012-12",
                3
            ],
            [
                1,
                null,
                "schoolName",
                "majorName",
                "majorCat",
                "area",
                "schoolCountry",
                "2011-12",
                "2013-12",
                3
            ]
        ];
    }
}
