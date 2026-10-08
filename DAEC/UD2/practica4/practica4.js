const notas = [4,9,6,10,7];

console.log("Notas ordenadas: ", notas.sort((a,b) => b-a).join(","));

const [pNotaAlta, sNotaAlta, ...tNotaAlta] = notas;

console.log("LAs 3 notas mas altas son: ", pNotaAlta , sNotaAlta, tNotaAlta);



