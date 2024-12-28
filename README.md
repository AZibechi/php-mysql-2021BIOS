# WebMarketCam - E-Commerce Project 📦🛒
### Instituto BIOS - PHP & MySQL Developer (2021)

## Overview 🌐
WebMarketCam es una aplicación web de comercio electrónico CRUD desarrollada para el proyecto final del curso BIOS de PHP y MySQL. El proyecto tiene como objetivo proporcionar una plataforma en línea para que los usuarios naveguen y compren productos. 

## Features 🔧
- **Autenticación de Usuario 🔒**: Los usuarios pueden registrarse, iniciar sesión y gestionar su perfil.
- **Gestión de Productos 🛍️**: Los administradores pueden agregar, editar y eliminar productos.
- **Catálogo de Productos 🏷️**: Los clientes pueden explorar productos, ver detalles y buscar por categorías.
- **Integración con Base de Datos 💾**: MySQL se utiliza para almacenar datos de usuarios, productos y pedidos.

## Tech Stack 🖥️
### Frontend:
- HTML 🌐
- CSS 🎨
- JavaScript ⚡

### Backend:
- PHP 🔧
- MySQL 🗄️

### Herramientas de Desarrollo 🛠️:
- XAMPP (Apache, MySQL, PHP)

## Installation 💻

### Prerequisites 📋
1. Instalar **XAMPP** (Apache, MySQL, PHP) para ejecutar un servidor local.
2. Asegúrate de tener un entorno de **PHP** y **MySQL** funcionando en tu máquina.

### Steps to Install 🔽

1. **Descargar el Proyecto 📂**:
   - Clona o descarga el repositorio del proyecto en tu máquina local.

2. **Configurar la Base de Datos 🗃️**:
   - Abre **XAMPP** y arranca **Apache** y **MySQL**.
   - Accede a **phpMyAdmin** (usualmente en [http://localhost/phpmyadmin](http://localhost/phpmyadmin)).
   - Crea una nueva base de datos (por ejemplo, `webmarketcam`).
   - Importa el esquema SQL (el archivo `database.sql` debe estar incluido en la carpeta del proyecto).

3. **Configurar Conexión a la Base de Datos 🔗**:
   - Abre el archivo `config.php` ubicado en el directorio `includes`.
   - Configura los parámetros de conexión a la base de datos (por ejemplo, host, usuario, contraseña y nombre de la base de datos).

4. **Ejecutar la Aplicación 🚀**:
   - Coloca la carpeta del proyecto en el directorio `htdocs` de tu instalación de XAMPP (por ejemplo, `C:\xampp\htdocs\WebMarketCam`).
   - En tu navegador, ve a [http://localhost/WebMarketCam/](http://localhost/WebMarketCam/) para acceder a la aplicación.

