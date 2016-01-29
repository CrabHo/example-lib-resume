<?php
namespace bigc\resume\data;

class EducationData
{

/*
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
*/
    private $uid;
    public function setUid($uid) {
        $this->uid = $uid;
    }
    public function getUid() {
        return $this->uid;
    }

    private $eduid;
    public function setEduId($eduid) {
        $this->eduid = $eduid;
    }
    public function getEduId() {
        return $this->eduid;
    }

    private $schoolName;
    public function setSchoolName($schoolName) {
        $this->schoolName = $schoolName
    }
    public function getSchoolName() {
        return $this->schoolName;
    }

    private $majorName;
    public function setMajorName($majorName) {
        $this->majorName = $majorName;
    }
    public function getMajorName() {
        return $this->majorName();
    }

    private $majorCat;
    public function setMajorCat($majorCat) {
        $this->majorCat = $majorCat;
    }
    public function getMajorCat() {
        return $this->majorCat;
    }

    private $area;
    public function setArea($area) {
        $this->area = $area;
    }
    public function getArea() {
        return $this->area;
    }

    private $schoolCountry;
    public function setSchoolCountry($schoolCountry) {
        $this->schoolCountry = $schoolCountry;
    }
    public function getSchoolCountry() {
        return $this->schoolCountry;
    }

    private $startDate;
    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }
    public function getStartDate() {
        return $this->startDate;
    }

    private $endDate;
    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }
    public function getEndDate() {
        return $this->endDate;
    }

    private $degreeStatus;
    public function setDegreeStatus($degreeStatus) {
        $this->degreeStatus = $degreeStatus;
    }
    public function getDegreeStatus() {
        return $this->degreeStatus;
    }
}