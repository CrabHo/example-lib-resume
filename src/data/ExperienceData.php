<?php
namespace bigc\resume\data;

use Respect\Validation\Validator as v;

class ExperienceData extends BasicData
{

    /**
     *  init valid rule
     */
    protected function initRule()
    {
        $this->validRule['uid']             = v::numeric();
        $this->validRule['expid']           = v::numeric();
        $this->validRule['firmName']        = v::stringType()->length(1, 32);
        $this->validRule['indCatNo']        = v::stringType()->length(1, 32);
        $this->validRule['jobName']         = v::stringType()->length(1, 32);
        $this->validRule['areaNo']          = v::stringType()->length(1, 32);
    }

    /**
     *  init valid error message
     */
    protected function initMessage()
    {
        $this->validMessage['uid']      = 'uid must only contain numeric.';
        $this->validMessage['expid']    = 'expid must only contain numeric.';
        $this->validMessage['firmName'] = 'firmName must only string and length between 1 and 32.';
        $this->validMessage['indCatNo'] = 'indCatNo must only string and length between 1 and 32.';
        $this->validMessage['jobName']  = 'jobName must only string and length between 1 and 32.';
        $this->validMessage['areaNo']   = 'areaNo must only string and length between 1 and 32.';
    }

    /**
     *  Generator a education data object
     *
     *  @param      int         $uid            User id
     *  @param      int         $expid          Expid, it can be null
     *  @param      string      $firmName       firmName
     *  @param      string      $indCatNo       indCatNo
     *  @param      string      $jobName        jobName
     *  @param      string      $areaNo         areaNo
     *  @throws     \InvalidArgumentException
     *
     */
    public static function makeExperience(
        $uid,
        $expid,
        $firmName,
        $indCatNo,
        $jobName,
        $areaNo
    ) {
        $dataObject = new ExperienceData;
        $dataObject->setUid($uid);
        $dataObject->setEduId($eduid);
        $dataObject->setSchoolName($schoolName);
        $dataObject->setMajorName($majorName);
        $dataObject->setMajorCat($majorCat);
        $dataObject->setArea($area);
        $dataObject->setSchoolCountry($schoolCountry);
        $dataObject->setStartDate($startDate);
        $dataObject->setEndDate($endDate);
        $dataObject->setDegreeStatus($degreeStatus);

        if ($dataObject->getEduId() === null) {
            $dataObject->checkData(true);
        } else {
            $dataObject->checkData(false);
        }

        return $dataObject;
    }

    /**
     *  Check Data function, it will check all parameter is correct.
     *
     *  @param      boolean     $flag       true is new data, false is exist data
     *  @throws     \InvalidArgumentException
     */
    public function checkData($flag = false)
    {
        $this->validation("uid", $this->getUid());
        if (!$flag) {
            $this->validation("eduid", $this->getEduId());
        }
        $this->validation("schoolName", $this->getSchoolName());
        $this->validation("majorName", $this->getMajorName());
        $this->validation("majorCat", $this->getMajorCat());
        $this->validation("area", $this->getArea());
        $this->validation("schoolCountry" $this->getSchoolCountry());
        $this->validation("startDate", $this->getStartDate());
        $this->validation("endDate", $this->getEndDate());
        $this->validation("degreeStatus", $this->getDegreeStatus());
    }

    private $uid;
    public function setUid($uid)
    {
        $this->uid = $uid;
    }
    public function getUid()
    {
        return $this->uid;
    }

    private $expid;
    public function setExpId($expid)
    {
        $this->expid = $expid;
    }
    public function getExpId()
    {
        return $this->expid;
    }

    private $firmName;
    public function setFirmName($firmName)
    {
        $this->firmName = $firmName;
    }
    public function getFirmName()
    {
        return $this->firmName;
    }

    private $majorName;
    public function setMajorName($majorName)
    {
        $this->majorName = $majorName;
    }
    public function getMajorName()
    {
        return $this->majorName;
    }

    private $majorCat;
    public function setMajorCat($majorCat)
    {
        $this->majorCat = $majorCat;
    }
    public function getMajorCat()
    {
        return $this->majorCat;
    }

    private $area;
    public function setArea($area)
    {
        $this->area = $area;
    }
    public function getArea()
    {
        return $this->area;
    }

    private $schoolCountry;
    public function setSchoolCountry($schoolCountry)
    {
        $this->schoolCountry = $schoolCountry;
    }
    public function getSchoolCountry()
    {
        return $this->schoolCountry;
    }

    private $startDate;
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    public function getStartDate()
    {
        return $this->startDate;
    }

    private $endDate;
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }
    public function getEndDate()
    {
        return $this->endDate;
    }

    private $degreeStatus;
    public function setDegreeStatus($degreeStatus)
    {
        $this->degreeStatus = $degreeStatus;
    }
    public function getDegreeStatus()
    {
        return $this->degreeStatus;
    }
}
