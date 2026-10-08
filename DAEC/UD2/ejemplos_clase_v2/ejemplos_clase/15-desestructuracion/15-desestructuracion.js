const cupula = ["Alvaro", "Angel", "Victor", "Alex", "Manuel"];

//Desestructuracion

const [feo, angelmo, feo2, baena, peluquero] = cupula;

//PAra quedarnos con el resto de elementos 
const [primero, ...resto] = cupula;

//Intercambiar dos variables
let fernandoAlonso = 2;
let vertsappen = 4;

[fernandoAlonso, vertsappen] = [vertsappen, fernandoAlonso];