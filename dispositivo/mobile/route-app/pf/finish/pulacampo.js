function pulacampo(idobj, idproximo, idanterior) {
    var input = document.getElementById(idobj);
    var str = input.value;
    var mx = input.maxLength;
    
    if (str.length === mx) {
        // Se o campo atual estiver cheio, foca no próximo campo
        document.getElementById(idproximo).focus();
    } else if (str.length === 0 && idanterior) {
        // Se o campo atual estiver vazio e houver um campo anterior definido, foca no campo anterior
        document.getElementById(idanterior).focus();
    }
}
