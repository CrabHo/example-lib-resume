<?php
namespace bigc\resume\data;

use Respect\Validation\Validator as v;
use Cascade\Cascade;

abstract class BasicData
{
    protected $validRule;
    protected $validMessage;

    abstract protected function initRule();
    abstract protected function initMessage();

    public function __construct()
    {
        $this->initRule();
        $this->initMessage();
    }

    public function validation($ruleName, $value)
    {
        Cascade::getLogger('bigc\resume')->debug("BasicData validation $ruleName, $value");
        try {
            $this->validRule[$ruleName]->assert($value);
        } catch (\Respect\Validation\Exceptions\NestedValidationException $ex) {
            $e = new \InvalidArgumentException($this->validMessage[$ruleName], 0, $ex);
            Cascade::getLogger('bigc\resume')->warning($e->getMessage());
            throw $e;
        }
        return true;
    }
}
