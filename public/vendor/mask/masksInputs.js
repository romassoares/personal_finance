$('#cep').mask('00000-000');
$('#cnpj').mask('00.000.000/0000-00');
$('#cpf').mask('000.000.000-00');
$('#phone').mask('(00) 00000-0000');
$('#number').mask('0000000000');
$('#height').mask("00.00", {reverse: true})
$('#weight').mask("000.000", {reverse: true})
$('#doc_sus').mask("00000000000000000000");
$('#yourInputBoxHere').mask("99/99/9999", {placeholder: 'MM/DD/YYYY' });

$('#formEmployee').submit(() => {
    $('#cpf').unmask('000.000.000-00');
})

$('#formProfile').submit(() => {
    $('#cep').unmask('00000-000');
    $('#cnpj').unmask('00.000.000/0000-00');
    $('#cpf').unmask('000.000.000-00');
    $('#phone').unmask('(00) 00000-0000');
    $('#card_number').unmask();
})
$('#formConfig').submit(() => {
    $('#cep').unmask('00000-000');
    $('#cnpj').unmask('00.000.000/0000-00');
    $('#phone').unmask('(00) 00000-0000');
})

