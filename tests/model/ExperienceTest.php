<?php
namespace bigc\resume\model;

use bigc\resume\data\ExperienceData;
use PHPUnit_Framework_TestCase;

class ExperienceTest extends PHPUnit_Framework_TestCase
{

    public function testGetData()
    {
        $obj = new Experience();
        
        $obj->getData(12, 34);
        $obj->getDatas(12);
        //Test exception
        $this->setExpectedException('\InvalidArgumentException', "uid must only contain numeric.");
        $obj->getDatas(null);
        $obj->getData(null, 34);
        
        $this->setExpectedException('\InvalidArgumentException', "expid must only contain numeric.");
        $obj->getData(12, "abc");
    }

    public function testDeleteData()
    {
        $obj = new Experience;

        //test normal case
        $this->assertEquals(
            $obj->deleteData(123, 456),
            true
        );

        //Test exception
        $this->setExpectedException('\InvalidArgumentException', "uid must only contain numeric.");
        $obj->getData(null, 34);
        $this->setExpectedException('\InvalidArgumentException', "expid must only contain numeric.");
        $obj->getData(12, "abc");
    }

    public function testAddData()
    {
        $expData = ExperienceData::makeExperience(
            1,
            null,
            '1什麼都做公司',
            '1網際網路類',
            '1BE工程師',
            '1亞洲'
        );

        //test normal case
        $obj = new Experience();
        $this->assertEquals(
            $obj->addData($expData),
            true
        );
    }

    public function testUpdateData()
    {
        //test normal case
        $expData = ExperienceData::makeExperience(
            1,
            1,
            '1什麼都做公司',
            '1網際網路類',
            '1BE工程師',
            '1亞洲'
        );

        $obj = new Experience();
        $this->assertEquals(
            $obj->updateData($expData),
            true
        );

        //test exception case
        $expData = ExperienceData::makeExperience(
            1,
            null,
            '1什麼都做公司',
            '1網際網路類',
            '1BE工程師',
            '1亞洲'
        );
        $this->setExpectedException('\InvalidArgumentException', "expid must only contain numeric.");
        $obj->updateData($expData);
    }

    private function getData()
    {
        $expData = ExperienceData::makeExperience(
            1,
            1,
            '1什麼都做公司',
            '1網際網路類',
            '1BE工程師',
            '1亞洲'
        );
        return $expData;
    }
}
