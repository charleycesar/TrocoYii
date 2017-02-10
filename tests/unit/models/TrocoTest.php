<?php
namespace models;
use app\models\Troco;

class TrocoTest extends \PHPUnit_Framework_TestCase
{
    private $model;
    // tests check troco
    public function testCalcularTroco()
    {
        $this->model = new Troco();
        $this->model->total = 328;
        $this->assertEquals([100=>3,20=>1,5=>1,2=>1,1=>1],$this->model->calcularTroco());
    }
}
