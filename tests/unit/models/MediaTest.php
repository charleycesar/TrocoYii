<?php
namespace models;
use app\models\Media;

class MediaTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function testCalcularMedia()
    {
        $model = new Media();
        $model->nota1 = 10;
        $model->nota2 = 5;
        $model->nota3 = 3;
        $model->calcularMedia();
        $this->assertEquals(6,$model->media);
    }
}
