const precios = [12.5, 30, 8, 45.9, 19.99];

const noSuperan = precios.map((precio) => (precio*1.21)).filter((precio) => precio > 10);

console.log("Precios originales" ,precios.join(", "));
console.log("No superan 20€", noSuperan.join(", "));


