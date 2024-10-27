<h1 align="center"> EXAMEN </h1>

## Acerca de este proyecto

Esta es una interfaz sencilla que representa la pantalla de inicio de <a href="https://blife.mx/">blife.mx</a>, el diseño de la misma fue proporcionada en la vacante de empleo que en su momento publicó la compañia <i>(créditos a quien corresponda)</i>, se solicitaba realizar la interfaz con un lenguaje específico, sin embargo, con fines de práctica yo la he realizado empleando PHP y Bootstrap.

## Estructura del proyecto

He dividido el contenido del repositorio teniendo en mente el patron de arquitectura MVC (Modelo-Vista-Controlador), por lo cual el contenido de archivos y carpetas se agrupa de la siguiente manera:

- **Config**
  - Donde se almacenan los archivos de configuración necesarios para el funcionamiento del proyecto.
- **Controller**
  - Contiene los archivos que son vitales para el funcionamiento de cada vista, los controladores (para cada vista independiente) contienen los métodos disponibles para cada interfaz, pueden ser métodos como index, show, create, update, delete, etc. Los métodos disponibles para cada pantalla dependen del programador al igual que el nombre que le de a cada uno de ellos.
- **Model**
  - Esta carpeta se encuentra vacía debido a que el proyecto no requiere una conexión/interacción con una base de datos, si fuese el caso, aqui se guardarían los archivos correspondientes a los modelos de datos requeridos.
- **Others**
  - Carpeta vacía, esta carpeta podría contener archivos de ayuda o helpers si fueran necesarios.
- **Public**
  - En este lugar se encuentran almacenados recursos públicos, es decir, archivos CSS, algunos iconos e imágenes que se visualizan en la interfaz y que no exponen archivos sensibles (si fuera el caso).
- **Resources**
  - Esta es la carpeta en la que se encuentran los archivos principales de las vistas (HTML). He creado un mini motor de plantillas, este motor toma un archivo como plantilla que contiene sintaxis HTML con marcadores de posición para datos, lógica y una fuente de datos que proporciona los valores para los marcadores de posición para finalmente representarlo en el navegador. Esto es muy útil cuando un proyecto manipula/muestra información dinámica o interactua con una base de datos.
- **Index**
  - El archivo principal que define la página de inicio que se visualiza de forma predeterminada al acceder a cualquier sitio web.

## Resultados

