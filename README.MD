# ASIPI WORDPRESS THEMES

## Tema creado para ASIPI utilizando un tema tradicional de wordpress

### 1. Estructura:

├── assets (dir)/
│ ├── css (dir)
│ ├── images (dir)
│ └── js (dir)
├── inc (dir)
│ ├── ctp (dir)
│ ├── customizer (dir)
│ ├── filters (dir)
│ ├── functions (dir)
│ ├── hooks (dir)
│ ├── metabox (dir)
│ ├── setup (dir)
│ ├── shortcodes (dir)
│ ├── taxonomies (dir)
├── template-parts (dir)/
│ ├── footer (dir)
│ ├── header (dir)
│ ├── navigation (dir)
│ ├── page (dir)
│ └── post (dir)
├── 404.php
├── archive.php
├── comments.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── README.MD
├── screenshot.png
├── search.php
├── searchform.php
├── sidebar.php
├── single.php
└── style.css

### 2. Explicación:

Esta estructura diseñada para conservar de mejor manera todo el contenido y el soporte del tema y poder extender las funcionalidades con el tiempo.

1. **Carpeta raíz:** En esta se encuentras los archivos bases de la jerarquia de wordpress.<br><br>
2. **Assets:** Todos los archivos css, js, imágenes y librerías de frontend necesarias y entregadas por Asipi.<br><br>
3. **Inc:** Esta carpeta contiene todas funciones, filtros y elementos en php necesarios para crear las funcionalidades del tema. Esta carpeta esta dividida en carpetas y un archivo llamado **_includes.php_**. En el archivo previamente mencionado se agrega una solicitud a un archivo dentro de cada sub carpeta en el cual se debe agregar cada nueva funcionalidad.<br><br>
4. **pages:** En esta carpeta se agregara todas paginas templates del proyecto, por ejemplo sio es requerido crear un diseño para un page especifico.<br><br>
5. **template-parts:** En esta carpeta se guarda las secciones que se repitan en varios archivos con la intención de **NO** repetir ese código varias veces.<br><br>

### 3. Constantes

1. **NEWASIPI_PATH:** Dirección raíz del proyecto, basado en directorio de archivos.
2. **NEWASIPI_URL:** Dirección raíz del proyecto, basado en directorio basada en url.
3. **NEWASIPI_VERSION:** Versión del proyecto.
