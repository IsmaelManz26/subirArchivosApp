# Subir Archivos App

**Subir Archivos App** es una aplicación web desarrollada con Laravel que permite a los usuarios subir, gestionar y visualizar imágenes. Las imágenes se almacenan en un almacenamiento privado y se pueden visualizar a través de rutas específicas.

## Características

- Subida de imágenes con validación de tipo y tamaño.
- Almacenamiento de imágenes en una carpeta privada.
- Visualización de miniaturas de las imágenes subidas.
- Gestión de imágenes con opciones para eliminar.
- Uso de rutas protegidas para acceder a las imágenes almacenadas.

## Requisitos

- **PHP** ^8.2
- **Composer**
- **Laravel** ^11.9

## Instalación

1. **Clona el repositorio:**

   ```sh
   git clone https://github.com/tu-usuario/subir-archivos-app.git
   cd subir-archivos-app
   ```

2. **Instala las dependencias de Composer:**

   ```sh
   composer install
   ```

3. **Copia el archivo `.env.example` a `.env` y configura tus variables de entorno:**

   ```sh
   cp .env.example .env
   ```

4. **Genera la clave de la aplicación:**

   ```sh
   php artisan key:generate
   ```

5. **Configura la base de datos en el archivo `.env` y luego ejecuta las migraciones:**

   ```sh
   php artisan migrate
   ```

6. **Crea el enlace simbólico para el almacenamiento:**

   ```sh
   php artisan storage:link
   ```

## Uso

### Subir una imagen

1. Navega a la ruta `/upload` para acceder al formulario de subida de imágenes.
2. Selecciona una imagen y haz clic en "Subir".

### Ver todas las imágenes

1. Navega a la ruta `/viewall` para ver todas las imágenes subidas.
2. Haz clic en una imagen para verla en grande.

### Gestionar imágenes

1. Navega a la ruta `/manage` para gestionar las imágenes.
2. Puedes eliminar imágenes desde esta página.

## Estructura del Proyecto

```plaintext
.editorconfig
.env
.env.example
.gitattributes
.gitignore
app/
    Http/
        Controllers/
            SubirControlador.php
            ImageController.php
    Models/
        Subido.php
artisan
bootstrap/
config/
database/
public/
resources/
    views/
        layouts/
            app.blade.php
        subir/
            create.blade.php
            index.blade.php
            manage.blade.php
            viewAll.blade.php
            viewOne.blade.php
routes/
    web.php
storage/
tailwind.config.js
tests/
vendor/
vite.config.js
```

## Rutas

| Método  | Ruta            | Descripción                                          |
|---------|-----------------|------------------------------------------------------|
| GET     | `/`             | Página principal que muestra todas las fotos subidas.|
| GET     | `/upload`       | Formulario para subir una nueva foto.               |
| POST    | `/upload`       | Acción para subir una nueva foto.                   |
| GET     | `/viewall`      | Página que muestra todas las fotos subidas.         |
| GET     | `/viewone/{id}` | Página que muestra una foto específica.             |
| GET     | `/manage`       | Página para gestionar las fotos (eliminar).         |
| DELETE  | `/delete/{id}`  | Acción para eliminar una foto.                      |
| GET     | `/image/{id}`   | Ruta para mostrar una imagen desde el almacenamiento privado. |
| GET     | `/imageDB/{id}` | Ruta para mostrar una imagen desde la base de datos.|

## Controladores

### SubirControlador

- **index**: Muestra la página principal con todas las fotos subidas.
- **create**: Muestra el formulario para subir una nueva foto.
- **store**: Maneja la subida de una nueva foto.
- **viewAll**: Muestra todas las fotos subidas.
- **viewOne**: Muestra una foto específica.
- **manage**: Muestra la página para gestionar las fotos.
- **destroy**: Elimina una foto.

### ImageController

- **image**: Muestra una imagen desde el almacenamiento privado.
- **imageDB**: Muestra una imagen desde la base de datos.
