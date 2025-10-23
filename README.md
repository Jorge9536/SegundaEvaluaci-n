# 🚀 Evaluación 2 - Sistema de Login con Laravel y AdminLTE 3

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![AdminLTE](https://img.shields.io/badge/AdminLTE-3.2.0-blue?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-8.2.12-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3.2-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📋 Descripción del Proyecto

Sistema de autenticación desarrollado como parte de la **Evaluación 2** del curso, implementando un login personalizado con **Laravel** y la plantilla **AdminLTE 3**.

## 🖼️ Capturas del Sistema

### 📱 Página de Login
![Login Page](https://github.com/user-attachments/assets/db36d4e6-1804-4a9f-abca-3b26fd58c693)
*Formulario de login con diseño AdminLTE 3*

### 🏠 Dashboard Principal
![Dashboard](https://github.com/user-attachments/assets/6a8b119c-491a-4222-9e4e-d135a69c6c26)
*Dashboard con mensaje de bienvenida y estadísticas*

## 🛠️ Tecnologías Utilizadas

- **Backend:** Laravel 12.x ([Documentación](https://laravel.com/docs/12.x/releases))
- **Frontend:** AdminLTE 3, Bootstrap 5 ([Instalación AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Installation)) ([Instalar Bootstrap](https://www.neoguias.com/instalar-bootstrap-laravel/))
- **Autenticación:** Sistema personalizado sin librerías
- **Servidor:** PHP 8.2.12


## ⚡ Instalación y Configuración

### Prerrequisitos
- PHP 8.2.12 o superior
- Composer 2.6+
- Node.js 18+ (para assets)

### Pasos de instalación

# Clonar el repositorio
git clone https://github.com/Jorge9536/SegundaEvaluaci-n.git

# Entrar al directorio
cd SegundaEvaluacion

# Instalar dependencias de PHP
composer install

# Instalar dependencias de Node (opcional)
npm install

# Configurar variables de entorno
cp .env.example .env

# Generar key de la aplicación
php artisan key:generate

# Ejecutar el servidor
php artisan serve
