<?php
namespace bigc\resume\model;

use PHPUnit_Framework_TestCase;

class ExperienceTest extends PHPUnit_Framework_TestCase
{

    public function testGetData()
    {
        $obj = new Experience();
        
        //test normal case
        $this->assertEquals(
            $obj->getData('123', '456'),
            $this->getData()
        );
    }

    public function testDeleteData()
    {
        $obj = new Experience;

        //test normal case
        $this->assertEquals(
            $obj->deleteData(123, 456),
            ['result' => true]
        );
    }

    public function testAddData()
    {
        $data = [
            'firmName'  => '什麼都做公司',
            'indCatNo'  => '網際網路類',
            'jobName'   => 'BE工程師',
            'areaNo'    => '亞洲'
        ];
        $obj = new Experience;

        //test normal case
        $this->assertEquals(
            $obj->addData(123, $data),
            ['result' => true]
        );
    }

    public function testUpdateData()
    {
        $data = [
            'firmName'  => '什麼都做公司',
            'indCatNo'  => '網際網路類',
            'jobName'   => 'BE工程師',
            'areaNo'    => '亞洲'
        ];
        $obj = new Experience;

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
                'uid'       => 123,
                'expid'     => 456,
                'firmName'  => '什麼都做公司',
                'indCatNo'  => '網際網路類',
                'jobName'   => 'BE工程師',
                'areaNo'    => '亞洲'
            ]
        ];
        return $res;
    }
}
