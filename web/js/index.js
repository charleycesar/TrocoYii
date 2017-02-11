/*
*   Script para controlar elementos da pagina de boletim/index
*/
$(document).ready(function(){
    //input
    var input = '<label>Nota<input type="number" name="Media[notas][]" class="form-control" /><a href="#" class="remove">X</a></label>';
    //Adicao de input - click
    $('#adicionarNota').click(function(){
        $("#notasAppend").append(input);
    });
    //Adicionar evento de remover em click de cada elemento dentro do id #notasAppend
    $('#notasAppend').delegate('a','click',function(e){
        e.preventDefault();
        $(this).parent('label').remove();
    })
});
