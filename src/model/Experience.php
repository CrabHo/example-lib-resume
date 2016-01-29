<?php
namespace bigc\resume\model;

class Experience
{

    public function __construct()
    {
    }

    public function getDatas($uid)
    {
        $res = ['result' =>
            [
                'uid'       => $uid,
                'expid'     => 1,
                'firmName'  => '1什麼都做公司',
                'indCatNo'  => '1網際網路類',
                'jobName'   => '1BE工程師',
                'areaNo'    => '1亞洲'
            ],
            [
                'uid'       => $uid,
                'expid'     => 2,
                'firmName'  => '2什麼都做公司',
                'indCatNo'  => '2網際網路類',
                'jobName'   => '2BE工程師',
                'areaNo'    => '2亞洲'
            ]
        ];
        return $res;
    }

    /**
    *
    *   @param  Number      $uid    UserId
    *   @param  Number      $expid  Exp Id
    *   @return Array
    *   @throws Exception
    */
    public function getData($uid, $expid)
    {
        //QueryDB
        $res = ['result' =>
            [
                'uid'       => $uid,
                'expid'     => $expid,
                'firmName'  => '什麼都做公司',
                'indCatNo'  => '網際網路類',
                'jobName'   => 'BE工程師',
                'areaNo'    => '亞洲'
            ]
        ];
        return $res;
    }

    /**
    *
    *
    *   @param      Number      $uid    UserId
    *   @param      Number      $expid  Exp Id
    *   @param      Array       $data
    *   @return     Boolean
    *   @throws     Exception
    */
    public function updateData($id, $expid, $data)
    {
        //Update DB
        $res = ['result' => true];
        return $res;
    }

    /**
    *
    *   @param      Number      $uid    UserId
    *   @param      Number      $expid  Exp Id
    *   @return     Boolean
    *   @throws     Exception
    */
    public function deleteData($id, $expid)
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
