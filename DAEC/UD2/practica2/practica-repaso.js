const kilometros = [12, 5, 18, 7, 3];

const kmDeNuria = "9";

const kmActualizados = kilometros.push(parseInt(kmDeNuria)+1);

const kmPorDos = kilometros.map((kmpordos) => kmpordos + 2);

const kmMayoresASeis = kilometros.filter((km) => km > 6);

const kmDosOperaciones = kilometros.filter((km) => km > 6).map((dato) => dato +2);

let contadorKM= 0;
//Ejercicio 5 primera parte
kilometros.forEach((km) => {
  contadorKM += km;
});

const total = kilometros.reduce((totalKm, km) => totalKm + km, 0);

const totalKmMayoresASeis = kilometros.filter((km) => km > 6).reduce((totalKm, km) => totalKm + km, 0);


console.log("Kilometros originales: ", kilometros.join(", "));
console.log("Los kilimetros por dos son: ", kmPorDos);
console.log("Los kilimetros mayores que seis: ", kmMayoresASeis);
console.log("Los kilometros que pide en el 4 ejercicio: ", kmDosOperaciones.join(", "));
console.log("Ejercicio 5 con un for: ", contadorKM);
console.log("Ejercicio 5 con un reduce: ", total);







