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
        $dataObject->setExpid($expid);
        $dataObject->setFirmName($firmName);
        $dataObject->setIndCatNo($indCatNo);
        $dataObject->setJobName($jobName);
        $dataObject->setAreaNo($areaNo);

        if ($dataObject->getExpId() === null) {
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
            $this->validation("expid", $this->getExpId());
        }
        $this->validation("firmName", $this->getFirmName());
        $this->validation("indCatNo", $this->getIndCatNo());
        $this->validation("jobName", $this->getJobName());
        $this->validation("areaNo", $this->getAreaNo());
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

    private $indCatNo;
    public function setIndCatNo($indCatNo)
    {
        $this->indCatNo = $indCatNo;
    }
    public function getIndCatNo()
    {
        return $this->indCatNo;
    }

    private $jobName;
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;
    }
    public function getJobName()
    {
        return $this->jobName;
    }

    private $areaNo;
    public function setAreaNo($areaNo)
    {
        $this->areaNo = $areaNo;
    }
    public function getAreaNo()
    {
        return $this->areaNo;
    }
}
