# proyectos-laravel
Proyecto Final del curso - Introducción a PHP y Laravel

```markdown
# gestion-proyectos-laravel

Sistema CRUD minimalista para la gestión de proyectos.  
Stack: Laravel 11, MySQL 8, Blade, Bootstrap 5 y barryvdh/laravel-dompdf (reportes PDF).

---

## Requisitos previos

- PHP 8.2+  
- Composer  
- MySQL 8  
- Node.js & npm (para compilación opcional de assets)  

---

## Instalación paso a paso

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/tu-usuario/gestion-proyectos-laravel.git
   cd gestion-proyectos-laravel
   ```

2. **Instalar dependencias PHP**
   ```bash
   composer install
   ```

3. **Instalar dependencias Node (opcional para Vite)**
   ```bash
   npm install && npm run build
   ```

4. **Copiar archivo de entorno**
   ```bash
   cp .env.example .env
   ```

5. **Configurar base de datos en `.env`**
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=gestion_proyectos
   DB_USERNAME=root
   DB_PASSWORD=secret
   ```

6. **Generar clave de aplicación**
   ```bash
   php artisan key:generate
   ```

7. **Ejecutar migraciones y seeders**
   ```bash
   php artisan migrate --seed
   ```

8. **Crear enlace simbólico para almacenamiento (si usas uploads)**
   ```bash
   php artisan storage:link
   ```

9. **Levantar el servidor local**
   ```bash
   php artisan serve
   ```
   Visita http://localhost:8000/proyectos

---

## Comandos útiles

| Acción                                       | Comando                          |
|----------------------------------------------|----------------------------------|
| Ejecutar tests                               | `php artisan test`               |
| Ver rutas registradas                        | `php artisan route:list`         |
| Refrescar base de datos con datos de prueba  | `php artisan migrate:fresh --seed` |
| Generar PDF de prueba                        | `http://localhost:8000/proyectos/pdf` |

---

## Estructura rápida

- Modelo: `app/Models/Proyecto.php`  
- Controlador: `app/Http/Controllers/ProyectoController.php`  
- Rutas: `routes/web.php`  
- Vistas: `resources/views/proyectos/*.blade.php`  
- Factory: `database/factories/ProyectoFactory.php`  
- Seeder: `database/seeders/ProyectoSeeder.php`  

---

## Reporte PDF

- Ruta: `/proyectos/pdf`  
- Generado con `barryvdh/laravel-dompdf`.  
- Formato oficial:  
  ```
  Gobierno de El Salvador  
  [Tu institución]  
  [Fecha]  
  Id | NombreProyecto | fuenteFondos | MontoPlanificado | MontoPatrocinado | MontoFondosPropios
  ```

---
