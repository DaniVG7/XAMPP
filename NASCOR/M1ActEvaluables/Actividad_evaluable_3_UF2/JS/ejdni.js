function calcularDNI () {
    var arrayletra = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    var resultadoLetra;
    const numeroDNI = Number(document.getElementById("numerointroducido").value); 
    const letraDNI = document.getElementById("letraintroducida").value; 
    
    
    
    if(numeroDNI < 1 || !Number.isInteger(numeroDNI) || numeroDNI> 99999999){
        document.getElementById('resultadoDni').innerHTML = "Este número de DNI no es válido ❌";
        return;
    }  
    else if (!/^[a-zA-Z]+$/.test(letraDNI)) {
        alert('Debe introducir una letra');
        return;
    }
    else{
        resultadoLetra = arrayletra[numeroDNI % 23];
        if (letraDNI.toUpperCase() === resultadoLetra){
            document.getElementById('resultadoDni').innerHTML = "DNI VÁLIDO";
        }
        else {
            document.getElementById('resultadoDni').innerHTML = "La letra del DNI no es correcta ❌"
        }
    }

    document.getElementById("resultadoDni").innerHTML += "<br>" + "El numero de DNI correcto es: " + numeroDNI + '-' + resultadoLetra + '✅'
}
