<?php
namespace bigc\resume\data;

use Respect\Validation\Validator as v;

class EducationData extends BasicData
{

    /**
     *  init valid rule
     */
    protected function initRule()
    {
        $this->validRule['uid']             = v::numeric();
        $this->validRule['eduid']           = v::numeric();
        $this->validRule['schoolName']      = v::stringType()->length(1, 32);
        $this->validRule['majorName']       = v::stringType()->length(1, 32);
        $this->validRule['majorCat']        = v::stringType()->length(1, 32);
        $this->validRule['area']            = v::stringType()->length(1, 32);
        $this->validRule['schoolCountry']   = v::stringType()->length(1, 32);
        $this->validRule['startDate']       = v::date('Y-m');
        $this->validRule['endDate']         = v::date('Y-m');
        $this->validRule['degreeStatus']    = v::intVal()->between(1, 3);
    }

    /**
     *  init valid error message
     */
    protected function initMessage()
    {
        $this->validMessage['uid']              = 'uid must only contain numeric.';
        $this->validMessage['eduid']            = 'eduid must only contain numeric.';
        $this->validMessage['schoolName']       = 'schoolName must only string and length between 1 and 32.';
        $this->validMessage['majorName']        = 'majorName must only string and length between 1 and 32.';
        $this->validMessage['majorCat']         = 'majorCat must only string and length between 1 and 32.';
        $this->validMessage['area']             = 'area must only string and length between 1 and 32.';
        $this->validMessage['schoolCountry']    = 'schoolCountry must only string and length between 1 and 32.';
        $this->validMessage['startDate']        = 'startDate must be a date and format Y-m.';
        $this->validMessage['endDate']          = 'endDate must be a date and format Y-m.';
        $this->validMessage['degreeStatus']     = 'degreeStatus must only contain numeric and length between 1 and 3.';
    }

    /**
     *  Generator a education data object
     *
     *  @param      int         $uid            User id
     *  @param      int         $eduid          EduId, it can be null
     *  @param      string      $schoolName     School name
     *  @param      string      $majorName      majorName
     *  @param      string      $majorCat       majorCat
     *  @param      string      $area           area
     *  @param      string      $schoolCountry  schoolCountry
     *  @param      date        $startDate      startDate
     *  @param      date        $endDate        endDate
     *  @param      int         $degreeStatus   degreeStatus
     *  @throws     \InvalidArgumentException
     *
     */
    public static function makeEducation(
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
        $dataObject = new EducationData;
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
        $this->validation("schoolCountry", $this->getSchoolCountry());
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

    private $eduid;
    public function setEduId($eduid)
    {
        $this->eduid = $eduid;
    }
    public function getEduId()
    {
        return $this->eduid;
    }

    private $schoolName;
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;
    }
    public function getSchoolName()
    {
        return $this->schoolName;
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
