const precios = [12.5, 30, 8, 45.9, 19.99];
console.log(" PRECIOS ");
console.log("nº Articulos", precios.length);
console.log("precio de los articulos:", precios.join(", "));

const total = precios.reduce((acumulado, precio) => acumulado+precio, 0);
console.log("Total calculado con reduce: ", total, "€");


