<?php
namespace models;
use app\models\Boletim;

class BoletimTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function testCalcularMedia()
    {
        $model = new Boletim();
        $model->notas = [ 10, 5, 3];
        $model->calcularMedia();
        $this->assertEquals(6,$model->media);
    }
}
