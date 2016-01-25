<?php
namespace bigc\resume\model;

class Education
{

    public function __construct()
    {
    }

    /**
    *
    *   @param  Number      $uid    UserId
    *   @param  Number      $eduid  Edu Id
    *   @return Array
    *   @throws Exception
    */
    public function getData($uid, $eduid)
    {
        //QueryDB
        $res = ['result' =>
            [
                'uid'           => $uid,
                'eduid'         => $eduid,
                'schoolName'    => '社會大學',
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

    /**
    *
    *
    *   @param      Number      $uid    UserId
    *   @param      Number      $eduid  Edu Id
    *   @param      Array       $data
    *   @return     Boolean
    *   @throws     Exception
    */
    public function updateData($id, $uid, $data)
    {
        //Update DB
        $res = ['result' => true];
        return $res;
    }

    /**
    *
    *   @param      Number      $uid    UserId
    *   @param      Number      $eduid  Edu Id
    *   @return     Boolean
    *   @throws     Exception
    */
    public function deleteData($id, $uid)
    {
        $res = ['result' => true];
        return $res;
    }

    /**
    *
    *
    *   @param      Number      $uid    UserId
    *   @return     Boolean
    *   @throws     Exception
    */
    public function addData($id, $data)
    {
        //Add DB
        $res = ['result' => true];
        return $res;
    }
}
