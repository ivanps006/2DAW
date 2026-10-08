const temperaturas = [18, 21, 25, 19, 30, 28, 22];

console.log("Se paso algun dia de 30 grados?: ", temperaturas.some((temp) => temp > 30));

console.log("Estuvieron todos los dias por encima de 15?: ", temperaturas.every((temp) => temp > 15));

console.log("Cual fue el primer dia de la semana en superar los 25?: ", temperaturas.find((temp) => temp > 25));

console.log("En que dia de la semana esta?: ", temperaturas.findIndex((temp) => temp > 25));

console.log("Temperaturas ordenadas: ", temperaturas.sort((a,b) => b-a));



