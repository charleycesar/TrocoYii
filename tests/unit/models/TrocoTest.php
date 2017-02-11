<?php
namespace models;
use app\models\Troco;

class TrocoTest extends \PHPUnit_Framework_TestCase
{
    // tests check troco
    public function testCalcularTroco()
    {
        $model = new Troco();
        $model->total = 328.75;
        $expect = [
            'notas'  =>[100=>3,20=>1,5=>1,2=>1,1=>1],
            'moedas' =>[50=>1,25=>1]
        ];
        $model->calcularTroco();
        $this->assertEquals($expect,$model->troco);
    }
    public function testCalcularNotas()
    {
        $model = new Troco();
        $model->total = 328;
        $this->assertEquals([100=>3,20=>1,5=>1,2=>1,1=>1],$model->calcularNotas($model->total));
    }
    public function testCalcularMoedas()
    {
        $model = new Troco();
        $model->total = 75;
        $this->assertEquals([50=>1,25=>1],$model->calcularMoedas($model->total));
    }
}
