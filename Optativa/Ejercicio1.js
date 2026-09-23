function numeroOrdinal(numero, nombre){
    if(numero<=999 && numero >= 1){
        if(numero%10 == 1 && numero != 11){
            return nombre + "st";
        } else if (numero%10 == 2 && numero != 12){
            return nombre + "nd";
        } else if(numero%10 == 3 && numero != 13){
            return nombre + "rd";
        } else{
            return nombre + "th";
        }
    }
}

console.log(numeroOrdinal(1, "Ivan"));