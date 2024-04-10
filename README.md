# Solución Prueba Técnica - Jhon Byron Quiroz

Este documento describe las soluciones implementadas para la prueba técnica propuesta, incluyendo la creación de un plugin personalizado en WordPress y la gestión de un Custom Post Type para libros.

## Solución al Primer Punto: ScanToolWP Plugin

**Objetivo**: Crear un plugin que añada un menú en el Dashboard de WordPress con las páginas "Dashboard" y "About", mostrando información específica.

### Página Dashboard

La página "Dashboard" del plugin muestra:

- Nombre del sitio
- URL de instalación
- URL de WordPress
- Versión de WordPress
- Listado de temas instalados (tema activo en negrita)
- Listado de plugins instalados (activos en verde, inactivos en rojo)
- Número de páginas publicadas
- Número de blogs publicados

### Página About

La página "About" incluye:

- Nombre del autor del plugin (Jhon Byron Quiroz)
- Botones de redes sociales apuntando a las páginas de NativApps:
  - [Facebook](https://www.facebook.com/nativapps)
  - [Instagram](https://www.instagram.com/nativapps/)
  - [LinkedIn](https://www.linkedin.com/company/nativapps-inc/)

**Implementación**: Se instaló WordPress localmente (v6.5) sin modificar archivos de origen. El plugin `ScanToolWP` se encuentra en la carpeta de plugins, permitiendo su activación y desactivación.

- Código fuente disponible en: [ScanToolWP Plugin](https://github.com/jhonbyronquirozperez/Soluci-n-Prueba-t-cnica-Jhon-Quiroz/blob/main/wp-content/plugins/ScanToolWP/Scantool.php)

![Dashboard Plugin](https://cdn.shopify.com/s/files/1/0843/0167/6823/files/image3.png?v=1712788914) 
![Dashboard Plugin](https://cdn.shopify.com/s/files/1/0843/0167/6823/files/image4.png?v=1712788914) 

## Solución al Segundo Punto: Custom Post Type "Libros"

**Objetivo**: Agregar un menú "Libros" en el Dashboard para gestionar libros con campos específicos (Nombre, Género, Autor, Año de publicación, Imagen de portada).

**Implementación**: La solución se integra en el archivo `functions.php` del tema `twentytwentyfour`.

- Ver implementación en: [Custom Post Type Libros](https://github.com/jhonbyronquirozperez/Soluci-n-Prueba-t-cnica-Jhon-Quiroz/blob/main/wp-content/themes/twentytwentyfour/functions.php)
![Dashboard Plugin](https://cdn.shopify.com/s/files/1/0843/0167/6823/files/image2.png?v=1712788913) 

### Vista del Listado de Libros

La vista para listar los libros se implementa en `page-listado-libros.php`, en la misma carpeta del archivo `functions.php`.

- Vista de listado de libros: [Listado de Libros](https://github.com/jhonbyronquirozperez/Soluci-n-Prueba-t-cnica-Jhon-Quiroz/blob/main/wp-content/themes/twentytwentyfour/page-listado-libros.php)

![Listado de Libros](URL_IMAGEN_LISTADO_LIBROS)  

---

*Desarrollado por Jhon Byron Quiroz*
