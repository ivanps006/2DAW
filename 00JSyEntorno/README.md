Parte 6: Preguntas de reflexión
¿Qué hace console.log?
- Mostrar en consola lo que le pasemos

¿Qué ocurre si cambias el valor de la variable desde la consola? ¿Se puede?
- Depende: si la variable se declaró con let, sí se puede reasignar su valor desde la consola. Si se declaró con const, no se puede reasignar, y como en este caso es un valor primitivo, tampoco existe otra forma de cambiarlo.

¿Para qué sirve la consola del navegador en este contexto?
- Para hacer pruebas con el codigo sin cambiar el original

Para qué sirve el archivo HTML en este contexto?
- Para tener un esqueleto de la pagina, quiero decir, para poder ver los cambios que hace JavaScript en la web.

¿Por qué es una buena práctica separar el código JavaScript del HTML?
- Por si algun dia hay que actualizar o cambiar el codigo solo tienes que tocar el archivo .js y no los demas.

Por qué se llama Vanilla JavaScript?
- Para referirse a el JavaScript mas antiguo, sin librerias ni frameworks ni nada.

Cuándo se usa JavaScript puro y cuándo se usan frameworks o librerías como REACT?
- Usas frameworks o librerias cuando vas a desarrollar una web grande y compleja para que los frameworks y librerias te ayuden a hacerla y mantenerla mas facil

Cómo se define una función en JS
- function nombre(atributo1, atributi2){}

Sobre el código demuestra la diferencia entre let y const
Indica en el código:
- fichero hola.html linea de la 17 a la 28

Si puede evitarse el uso de let. Qué hace
- JavaScript va a crearte una variable global sin que de error.

Cuántos eventos hay en el código, cuáles son y para qué sirven
- HAy dos eventos:
    - 1º DOMContentLoaded: Se dispara cuando el navegador termine de cargar todo el HTML. Sirve para asegurarse de que JavaScript no intenta acceder a elementos del HTML hasta que no esten cargados en la paginas.

    - 2º Submit: Se dispara cuando el usuario envia el formulario. Sirve para capturar ese momento y ejecutar si logica, osea, lee el valor del input y muestra el saludo.