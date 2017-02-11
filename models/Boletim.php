<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Boletim extends Model
{
    public $media;
    public $notas = [];

    /**
    *   Funcao para calcular Media
    *   @author Charley Oliveira    <charleycesar@gmail.com>
    *   @param  $this->nota1,$this->nota2, $this->nota3
    *   @return {Integer} $this->media
    **/
    public function calcularMedia()
    {
        $quantidade_notas = sizeof($this->notas);
        $soma = 0;
        for ($i=0; $i < $quantidade_notas; $i++) {
            $soma += $this->notas[$i];
        }
        $this->media = intval($soma / $quantidade_notas);
        return $this->media;
    }

}
