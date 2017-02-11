$(document).ready(function(){
    var input = '<label>Nota<input type="number" name="nota[]" class="form-control" /><a href="#" class="remove">X</a></label>';
    $('#adicionarNota').click(function(){
        $("#notasAppend").append(input);
    });
    $('#notasAppend').delegate('a','click',function(e){
        e.preventDefault();
        $(this).parent('label').remove();
    })
});
