<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Media extends Model
{
    public $media, $nota1, $nota2, $nota3;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['nota1','nota2','nota3'], 'number']
        ];
    }


    /**
    *   Funcao para calcular Media
    *   @author Charley Oliveira    <charleycesar@gmail.com>
    *   @param  $this->nota1,$this->nota2, $this->nota3
    *   @return {Integer} $this->media
    **/
    public function calcularMedia()
    {
        $notas = [$this->nota1,$this->nota2,$this->nota3];
        $quantidade_notas = sizeof($notas);
        $soma = 0;
        for ($i=0; $i < $quantidade_notas; $i++) {
            $soma += $notas[$i];
        }
        $this->media = intval($soma / $quantidade_notas);
        return $this->media;
    }

}
