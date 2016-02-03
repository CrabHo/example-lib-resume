<?php
namespace bigc\resume\model;

use bigc\resume\data\EducationData;
use PHPUnit_Framework_TestCase;

class EducationTest extends PHPUnit_Framework_TestCase
{

    public function testGetData()
    {
        $obj = new Education();
        
        $obj->getData(12, 34);
        $obj->getDatas(12);
        //Test exception
        $this->setExpectedException('\InvalidArgumentException', "uid must only contain numeric.");
        $obj->getDatas(null);
        $obj->getData(null, 34);
        
        $this->setExpectedException('\InvalidArgumentException', "eduid must only contain numeric.");
        $obj->getData(12, "abc");
    }

    public function testDeleteData()
    {
        $obj = new Education;

        //test normal case
        $this->assertEquals(
            $obj->deleteData(123, 456),
            true
        );

        //Test exception
        $this->setExpectedException('\InvalidArgumentException', "uid must only contain numeric.");
        $obj->getData(null, 34);
        $this->setExpectedException('\InvalidArgumentException', "eduid must only contain numeric.");
        $obj->getData(12, "abc");
    }

    public function testAddData()
    {
        $eduData = EducationData::makeEducation(
            12,
            null,
            '1社會大學',
            '1資訊管理',
            '1商管學科類',
            '1亞洲',
            '1台灣',
            '2013-09',
            '2015-06',
            1
        );

        //test normal case
        $obj = new Education();
        $this->assertEquals(
            $obj->addData($eduData),
            true
        );
    }

    public function testUpdateData()
    {
        //test normal case
        $eduData = EducationData::makeEducation(
            12,
            34,
            '1社會大學',
            '1資訊管理',
            '1商管學科類',
            '1亞洲',
            '1台灣',
            '2013-09',
            '2015-06',
            1
        );

        $obj = new Education();
        $this->assertEquals(
            $obj->updateData($eduData),
            true
        );

        //test exception case
        $eduData = EducationData::makeEducation(
            12,
            null,
            '1社會大學',
            '1資訊管理',
            '1商管學科類',
            '1亞洲',
            '1台灣',
            '2013-09',
            '2015-06',
            1
        );
        $this->setExpectedException('\InvalidArgumentException', "eduid must only contain numeric.");
        $obj->updateData($eduData);
    }

    private function getData()
    {
        $eduData = EducationData::makeEducation(
            12,
            34,
            '1社會大學',
            '1資訊管理',
            '1商管學科類',
            '1亞洲',
            '1台灣',
            '2013-09',
            '2015-06',
            1
        );
        return $eduData;
    }
}
