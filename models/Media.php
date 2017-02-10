<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Media extends Model
{
    public $media;
    public $notas = [];

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

    public function calcularMedia(){
        $quantidade_notas = sizeof($this->notas);
        $soma = 0;
        for ($i=0; $i <= $quantidade_notas; $i++) {
            $soma += $this->notas[$i];
        }
        $this->media = intval($soma / $quantidade_notas);
        return $this->media;
    }

}
