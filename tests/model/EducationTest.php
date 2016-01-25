<?php
namespace bigc\resume\model;

use PHPUnit_Framework_TestCase;

class EducationTest extends PHPUnit_Framework_TestCase
{

    public function testGetData()
    {
        $obj = new Education();
        
        //test normal case
        $this->assertEquals(
            $obj->getData('123', '456'),
            $this->getData()
        );
    }

    public function testDeleteData()
    {
        $obj = new Education;

        //test normal case
        $this->assertEquals(
            $obj->deleteData(123, 456),
            ['result' => true]
        );
    }

    public function testAddData()
    {
        $data = [
            'schoolName'    => '104社會大學',
            'majorName'     => '資訊管理',
            'majorCat'      => '商管學科類',
            'area'          => '亞洲',
            'schoolCountry' => '台灣',
            'startDate'     => '2013/9',
            'endDate'       => '2015/6',
            'degreeStatus'  => 1
        ];
        $obj = new Education;

        //test normal case
        $this->assertEquals(
            $obj->addData(123, $data),
            ['result' => true]
        );
    }

    public function testUpdateData()
    {
        $data = [
            'schoolName'    => '104社會大學',
            'majorName'     => '資訊管理',
            'majorCat'      => '商管學科類',
            'area'          => '亞洲',
            'schoolCountry' => '台灣',
            'startDate'     => '2013/9',
            'endDate'       => '2015/6',
            'degreeStatus'  => 1
        ];
        $obj = new Education;

        //test normal case
        $this->assertEquals(
            $obj->updateData(123, 456, $data),
            ['result' => true]
        );
    }

    private function getData()
    {
        $res = ['result' =>
            [
                'uid'           => '123',
                'eduid'         => 456,
                'schoolName'    => '104社會大學',
                'majorName'     => '資訊管理',
                'majorCat'      => '商管學科類',
                'area'          => '亞洲',
                'schoolCountry' => '台灣',
                'startDate'     => '2013/9',
                'endDate'       => '2015/6',
                'degreeStatus'  => 1
            ]
        ];
        return $res;
    }
}
