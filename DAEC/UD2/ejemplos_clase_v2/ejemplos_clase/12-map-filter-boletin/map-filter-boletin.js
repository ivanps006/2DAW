const notas = [10, 3, 7, 2, 9, 5];

const subidas = notas.map((nota) => nota + 1);

const aprobadas = subidas.filter((nota) => nota >= 5);

const refactorizar = aprobadas.filter((nota) => nota <10 );

console.log("BOLETÍN DE NOTAS");
console.log("Notas originales: ", notas.join(", "));
//console.log("Notas que pueden subir un punto: ", puedenSubirPunto.join(", "));
console.log("Notas subidas con un punto: ", subidas.join(", "));
console.log("Notas aprobadas: ", aprobadas.join(", "));