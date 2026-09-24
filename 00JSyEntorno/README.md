# Práctica: JS desde cero en el navegador — antes que REACT

## Parte 1: Instalación y configuración
- Instala Visual Studio Code desde [code.visualstudio.com](https://code.visualstudio.com)

## Parte 2: Primeros pasos con la consola del navegador
Abre tu navegador, pulsa F12 (o Ctrl+Shift+I), ve a la pestaña "Consola" y prueba:
```javascript
2 + 2
console.log("¡Hola, mundo!")
let nombre = "Anita"
nombre
```
![alt text](image.png)

## Parte 3: Tu primer archivo HTML + JavaScript
Archivo `hola.html` dentro de la carpeta `00JSyEntorno`:
```html
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Hola JS</title>
</head>
<body>
  <script>
    console.log("¡Hola, mundo!");
    let nombre = "Ana";
    console.log("Bienvenida, " + nombre);
  </script>
</body>
</html>
```
![alt text](image-2.png)

## Parte 4: Experimenta
- Cambié `nombre` por el mío y recargué la página.
- Añadí una suma con `console.log`.
- Añadí `apellido` y un saludo completo con `.toUpperCase()`.
- Mostré el saludo en la página con `document.body.innerHTML`.
- Publicado en GitHub Pages.

![alt text](image-1.png)

## Parte 5: Formulario HTML + JavaScript

**`formulario.html`:**
```html
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Saludo</title>
</head>
<body>
  <h1>Formulario de Saludo</h1>
  <form id="formulario">
    <label for="nombreInput">Nombre:</label>
    <input type="text" id="nombreInput" required>
    <button type="submit">Saludar</button>
  </form>
  <p id="salida"></p>

  <script src="formulario.js"></script>
</body>
</html>
```

**`formulario.js`:**
```javascript
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault();
    const nombre = document.getElementById('nombreInput').value;
    document.getElementById('salida').textContent = '¡Hola, ' + nombre + '!';
  });
});
```
![alt text](image-3.png)

## Parte 6: Preguntas de reflexión

**¿Qué hace `console.log`?**
Muestra en la consola lo que le pasemos.

**¿Qué ocurre si cambias el valor de la variable desde la consola? ¿Se puede?**
Depende: si la variable se declaró con `let`, sí se puede reasignar su valor desde la consola. Si se declaró con `const`, no se puede reasignar, y como en este caso es un valor primitivo, tampoco existe otra forma de cambiarlo.

**¿Para qué sirve la consola del navegador en este contexto?**
Para hacer pruebas con el código sin cambiar el original.

**¿Para qué sirve el archivo HTML en este contexto?**
Para tener un esqueleto de la página, es decir, para poder ver los cambios que hace JavaScript en la web.

**¿Por qué es una buena práctica separar el código JavaScript del HTML?**
Por si algún día hay que actualizar o cambiar el código, solo hay que tocar el archivo `.js` y no los demás.

**¿Por qué se llama Vanilla JavaScript?**
Para referirse al JavaScript sin librerías ni frameworks, "puro".

**¿Cuándo se usa JavaScript puro y cuándo se usan frameworks o librerías como React?**
Se usan frameworks o librerías cuando se va a desarrollar una web grande y compleja, para que ayuden a construirla y mantenerla más fácilmente.

**¿Cómo se define una función en JS?**
```javascript
function nombre(atributo1, atributo2) { }
```

**Demuestra la diferencia entre `let` y `const` en el código:**
Ver `hola.html`, líneas 17 a 28.

**¿Se puede evitar el uso de `let`? ¿Qué hace?**
Sí, se puede evitar siempre que la variable no vaya a reasignarse: en ese caso se usa `const` en su lugar. Si no se declara la variable con `let`, `const` ni `var`, JavaScript la crea igualmente como variable global implícita, sin dar error (salvo en modo estricto).

**¿Cuántos eventos hay en el código, cuáles son y para qué sirven?**
Hay dos eventos:
1. **`DOMContentLoaded`**: se dispara cuando el navegador termina de cargar todo el HTML. Sirve para asegurarse de que JavaScript no intenta acceder a elementos del HTML antes de que existan en la página.
2. **`submit`**: se dispara cuando el usuario envía el formulario. Sirve para capturar ese momento y ejecutar la lógica: leer el valor del input y mostrar el saludo.

## Enlaces a las actividades
[hola.html](https://ivanps006.github.io/2DAW/00JSyEntorno/hola.html)

[formulario.html](https://ivanps006.github.io/2DAW/00JSyEntorno/formulario.html)
