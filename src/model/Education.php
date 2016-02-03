<?php
namespace bigc\resume\model;

use Cascade\Cascade;
use bigc\resume\data\EducationData;

class Education
{
    
    /**
    *   Get data array of education
    *   @param  Number          $uid    UserId
    *   @return Array
    *   @throws Exception
    */
    public function getDatas($uid)
    {
        $valid = new EducationData;
        $valid->validation("uid", $uid);

        $eduData1 = EducationData::makeEducation(
            $uid,
            1,
            '1社會大學',
            '1資訊管理',
            '1商管學科類',
            '1亞洲',
            '1台灣',
            '2013-09',
            '2015-06',
            1
        );
        $eduData2 = EducationData::makeEducation(
            $uid,
            2,
            '2社會大學',
            '2資訊管理',
            '2商管學科類',
            '2亞洲',
            '2台灣',
            '2013-09',
            '2015-06',
            2
        );

        return [$eduData1, $eduData2];
    }

    /**
    *   Get education data
    *   @param  Number          $uid    UserId
    *   @param  Number          $eduid  Edu Id
    *   @return EducationData
    *   @throws Exception
    */
    public function getData($uid, $eduid)
    {
        $valid = new EducationData;
        $valid->validation("uid", $uid);
        $valid->validation("eduid", $eduid);

        //Query database
        $eduData = EducationData::makeEducation(
            $uid,
            $eduid,
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

    /**
    *   Update EducationData
    *   @param      EducationData   $data
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
    *   Delete EducationData
    *   @param      EducationData   $data
    *   @return     Boolean
    *   @throws     Exception
    */
    public function deleteData($uid, $eduid)
    {
        $valid = new EducationData;
        $valid->validation("uid", $uid);
        $valid->validation("eduid", $eduid);
        //Delete database

        return true;
    }

    /**
    *   Add EducationData
    *   @param      EducationData   $data
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
