const cesta = [12.5, 30, 45.9, 19.99];

console.log("CESTA");
console.log("Precios: ", cesta.join(","));

//find para recorrer hasta que encuentre lo que quiere
console.log("Primero mayor que 20: ", cesta.find((precio) => precio > 20));

console.log("Primero mayor que 90: ", cesta.find((precio) => precio > 90));

//Ahora igual pero devolviendo la posicion del valor
console.log("Que precio es mayor que 20: ", cesta.findIndex((precio) => precio >20) );

//SOme y enery no devuelve elementos, solo true o false
console.log("Hay algun producto gratis: ", cesta.some((precio) => precio === 0));

console.log("Todos los precios estan por debajo de 50: " , cesta.every((precio) => precio < 50));

//Ordendos los precios
console.log("Los precios ordenados son:" , cesta.sort((a,b) => a-b).join(","));






