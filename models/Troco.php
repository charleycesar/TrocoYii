<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Troco extends Model
{
    public $total;
    public $troco = [];

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['total'], 'number']
        ];
    }

    public function calcularTroco(){
        $notas = [100,50,20,10,5,2,1];
        $total = $this->total;

        foreach ($notas as $key => $nota) {
            $qtdNotas = floor( $total / $nota );
            $this->troco[$nota] = (int) $qtdNotas;
            $total = $total % $nota;
        }

        $this->troco = array_filter($this->troco);
        return $this->troco;
    }

}
