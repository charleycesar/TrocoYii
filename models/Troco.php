<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Troco extends Model
{
    public $total;
    public $notas = [];
    public $moedas = [];
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

        $pedido = (float) $this->total;
        $dinheiro = explode('.',$pedido);

        if( isset($dinheiro[0]) ){
            $this->calcularNotas($dinheiro[0]);
        }
        if( isset($dinheiro[1]) ){
            $this->calcularMoedas($dinheiro[1]);
        }

        return $this->troco = [
            'notas' => $this->notas,
            'moedas' => $this->moedas
        ];
    }

    public function calcularNotas($valor = null){

        $valores_de_notas = [100,50,20,10,5,2,1];
        foreach ($valores_de_notas as $key => $nota) {
            $qtdNotas = floor( $valor / $nota );
            $this->notas[$nota] = intval($qtdNotas);
            $valor %= $nota;
        }

        $this->notas = array_filter($this->notas);
        return $this->notas;

    }

    public function calcularMoedas($valor = null){

        $valores_de_modeda = [50,25,10,5,1];
        if( intval($valor) > 99){
            throw new Exception("Error Processing Request", 422);
        }

        foreach ($valores_de_modeda as $key => $moeda) {
            $qtdMoedas = floor( $valor / $moeda );
            $this->moedas[$moeda] = intval($qtdMoedas);
            $valor %= $moeda;
        }

        $this->moedas = array_filter($this->moedas);
        return $this->moedas;

    }

}
