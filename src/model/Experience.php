<?php
namespace bigc\resume\model;

use Cascade\Cascade;
use bigc\resume\data\ExperienceData;

class Experience
{
    
    /**
    *   Get data array of Experience
    *   @param  Number          $uid    UserId
    *   @return Array
    *   @throws Exception
    */
    public function getDatas($uid)
    {
        $valid = new ExperienceData;
        $valid->validation("uid", $uid);

        $expData1 = ExperienceData::makeExperience(
            $uid,
            1,
            '1什麼都做公司',
            '1網際網路類',
            '1BE工程師',
            '1亞洲'
        );
        $expData2 = ExperienceData::makeExperience(
            $uid,
            2,
            '2什麼都做公司',
            '2網際網路類',
            '2BE工程師',
            '2亞洲'
        );

        return [$expData1, $expData2];
    }

    /**
    *   Get Experience data
    *   @param  Number          $uid    UserId
    *   @param  Number          $expid  Exp Id
    *   @return ExperienceData
    *   @throws Exception
    */
    public function getData($uid, $expid)
    {
        $valid = new ExperienceData;
        $valid->validation("uid", $uid);
        $valid->validation("expid", $expid);

        //Query database
        $expData = ExperienceData::makeExperience(
            $uid,
            $expid,
            '1社會大學',
            '1資訊管理',
            '1商管學科類',
            '1亞洲',
            '1台灣',
            '2013-09',
            '2015-06',
            1
        );

        return $expData;
    }

    /**
    *   Update ExperienceData
    *   @param      ExperienceData   $data
    *   @return     Boolean
    *   @throws     Exception
    */
    public function updateData($data)
    {
        //Check data is correct
        $data->checkData(false);

        //Update database

        return true;
    }

    /**
    *   Delete ExperienceData
    *   @param      Number          $uid    UserId
    *   @param      Number          $expid  Exp Id
    *   @return     Boolean
    *   @throws     Exception
    */
    public function deleteData($uid, $expid)
    {
        $valid = new ExperienceData;
        $valid->validation("uid", $uid);
        $valid->validation("expid", $expid);
        //Delete database

        return true;
    }

    /**
    *   Add ExperienceData
    *   @param      ExperienceData   $data
    *   @return     Boolean
    *   @throws     Exception
    */
    public function addData($data)
    {
        //Check data
        $data->checkData(true);

        //Insert database
        
        return true;
    }
}
