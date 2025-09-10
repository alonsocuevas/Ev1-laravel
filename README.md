# ☕ Coffe Time - Sistema de Gestión de Cafetería

![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.1+-blue.svg)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.2-green.svg)
![License](https://img.shields.io/badge/License-MIT-yellow.svg)

## 📋 Descripción del Proyecto

**Coffe Time** es una aplicación web desarrollada en Laravel que simula el sistema de gestión de una cafetería chilena. La aplicación permite a los usuarios registrarse, iniciar sesión y explorar el catálogo de productos organizados en tres categorías principales: café, pastelería y sándwiches.

### 🎯 Características Principales

- **Sistema de Autenticación**: Registro e inicio de sesión de usuarios
- **Catálogo de Productos**: Visualización de productos por categorías
- **Interfaz Responsiva**: Diseño adaptativo con Bootstrap 5
- **Gestión de Usuarios**: Sistema completo de usuarios con validaciones
- **Página Institucional**: Sección "Conócenos" con información de la empresa

## 🛠️ Stack Tecnológico

### Backend
- **Laravel 10.x** - Framework PHP
- **PHP 8.1+** - Lenguaje de programación
- **MySQL** - Base de datos
- **Laravel Sanctum** - Autenticación API

### Frontend
- **Blade Templates** - Motor de plantillas de Laravel
- **Bootstrap 5.2** - Framework CSS
- **jQuery 3.6** - Biblioteca JavaScript
- **Font Awesome** - Iconografía
- **SweetAlert2** - Alertas y notificaciones
- **Owl Carousel** - Carrusel de productos
- **Typed.js** - Efectos de escritura

### Herramientas de Desarrollo
- **Vite** - Build tool y bundler
- **Composer** - Gestor de dependencias PHP
- **NPM** - Gestor de paquetes Node.js
- **PHPUnit** - Framework de testing

## 📁 Estructura del Proyecto

```
Ev1-laravel/
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php      # Controlador de autenticación
│   │   └── HomeController.php      # Controlador principal
│   └── Models/
│       ├── User.php               # Modelo de usuario
│       └── Product.php            # Modelo de producto
├── database/
│   ├── migrations/                # Migraciones de base de datos
│   └── seeders/                   # Seeders para datos de prueba
├── public/
│   ├── css/                       # Estilos CSS
│   ├── js/                        # Scripts JavaScript
│   └── img/                       # Imágenes del proyecto
├── resources/
│   └── views/
│       ├── auth/                  # Vistas de autenticación
│       ├── admin/                 # Vistas principales
│       └── layouts/               # Layouts base
└── routes/
    └── web.php                    # Rutas web
```

## 🚀 Instalación y Configuración

### Prerrequisitos

- **XAMPP** (Apache + MySQL + PHP 8.1+)
- **Composer**
- **Git**

### Pasos de Instalación

1. **Instalar XAMPP**
   ```bash
   # Descargar desde: https://www.apachefriends.org/es/index.html
   # Verificar configuración de php.ini
   ```

2. **Instalar Composer**
   ```bash
   # Descargar desde: https://getcomposer.org/download/
   ```

3. **Configurar Base de Datos**
   ```bash
   # Iniciar Apache y MySQL en XAMPP
   # Crear base de datos 'cafeteria' en phpMyAdmin
   ```

4. **Clonar el Repositorio**
   ```bash
   git clone --single-branch --branch master https://github.com/jeremyormeno30/Evaluacion_1.git
   cd Evaluacion_1
   ```

5. **Instalar Dependencias**
   ```bash
   composer install
   npm install
   ```

6. **Configurar Variables de Entorno**
   ```bash
   # Copiar .env.example a .env
   cp .env.example .env
   
   # Configurar base de datos en .env
   DB_DATABASE=cafeteria
   
   # Generar clave de aplicación
   php artisan key:generate
   ```

7. **Ejecutar Migraciones**
   ```bash
   php artisan migrate
   ```

8. **Importar Datos de Productos**
   ```bash
   # Importar script_productos.txt desde Script_Products/ en phpMyAdmin
   ```

9. **Iniciar el Servidor**
   ```bash
   php artisan serve
   # Acceder a: http://localhost:8000/login
   ```

## 🎮 Uso de la Aplicación

### Funcionalidades Disponibles

1. **Registro de Usuario**
   - Acceso: `/register`
   - Campos: Nombre, Apellido, Email, Contraseña
   - Validaciones: Email único, contraseña mínima 6 caracteres

2. **Inicio de Sesión**
   - Acceso: `/login`
   - Opción "Recordarme"
   - Redirección automática al dashboard

3. **Dashboard Principal**
   - Acceso: `/home` (requiere autenticación)
   - Visualización de productos por categorías
   - Navegación entre secciones

4. **Catálogo de Productos**
   - **Café**: 5 variedades (Mocca, Latte, Espresso, Americano, Irish)
   - **Pastelería**: 5 opciones (Tres leches, Selva negra, Moka especial, etc.)
   - **Sándwiches**: 5 tipos (Omelette, Español, Americano, De Pechuga, De Atún)

5. **Página Institucional**
   - Acceso: `/conocenos`
   - Información de la empresa, misión, visión y valores

## 🗄️ Base de Datos

### Tablas Principales

#### `users`
- `id` (Primary Key)
- `name` (VARCHAR)
- `surname` (VARCHAR)
- `email` (VARCHAR, UNIQUE)
- `password` (VARCHAR, HASHED)
- `timestamps`

#### `products`
- `id` (Primary Key)
- `name` (VARCHAR)
- `description` (TEXT)
- `price` (VARCHAR)
- `category` (VARCHAR)
- `img` (VARCHAR)
- `timestamps`

## 🧪 Testing

El proyecto incluye configuración básica de PHPUnit:

```bash
# Ejecutar tests
php artisan test

# Test de ejemplo incluido
# Verifica que la aplicación retorne respuesta exitosa
```

## 📱 Características de la Interfaz

- **Diseño Responsivo**: Adaptable a dispositivos móviles y desktop
- **Navegación Intuitiva**: Menú de navegación con scroll suave
- **Modales Interactivos**: Descripción detallada de productos
- **Efectos Visuales**: Animaciones con Typed.js y transiciones CSS
- **Carrusel de Productos**: Presentación atractiva de items
- **Tema Personalizado**: Colores y estilos específicos de la marca

## 🔧 Configuraciones Adicionales

### Middleware Implementado
- **Auth**: Protección de rutas autenticadas
- **CSRF**: Protección contra ataques CSRF
- **TrimStrings**: Limpieza automática de strings

### Validaciones
- **Registro**: Email único, contraseña confirmada
- **Login**: Credenciales requeridas
- **Formularios**: Validación de campos obligatorios

## 🚀 Mejoras Sugeridas

### Funcionalidades Futuras
1. **Sistema de Pedidos**: Carrito de compras y procesamiento de órdenes
2. **Panel de Administración**: CRUD completo para productos y usuarios
3. **Sistema de Reseñas**: Comentarios y calificaciones de productos
4. **Notificaciones**: Sistema de alertas y notificaciones push
5. **API REST**: Endpoints para aplicación móvil
6. **Pagos Online**: Integración con pasarelas de pago
7. **Gestión de Inventario**: Control de stock y disponibilidad
8. **Reportes**: Dashboard con métricas y estadísticas

### Mejoras Técnicas
1. **Optimización de Imágenes**: Compresión y lazy loading
2. **Caché**: Implementación de Redis o Memcached
3. **Testing**: Cobertura completa de tests unitarios y de integración
4. **Documentación API**: Swagger/OpenAPI documentation
5. **CI/CD**: Pipeline de integración continua
6. **Docker**: Containerización de la aplicación
7. **Logging**: Sistema robusto de logs y monitoreo
8. **Seguridad**: Implementación de rate limiting y validaciones adicionales

## 👥 Contribuidores

- **Alonso** - Desarrollo y diseño
- **Jeremy** - Desarrollo y funcionalidades

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 📞 Contacto

Para consultas o colaboraciones, contactar a los desarrolladores del proyecto.

---

**Coffe Time** - *100% Artesanal • 100% Chilena • 100% Olor a Café* ☕---
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
