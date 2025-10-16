## 🧩 Empleo Sin Barreras — Laravel

Una aplicación desarrollada en **Laravel** para la gestión de **vacantes, empresas y participantes**, con paneles de creación, listado y paginación.

---

## 🚀 Requisitos previos

Antes de comenzar asegúrate de tener instalado:

* [XAMPP](https://www.apachefriends.org/) (incluye **PHP**, **MySQL** y **Apache**)
* [Composer](https://getcomposer.org/)
* [Node.js y npm](https://nodejs.org/)


---

## ⚙️ Instalación

Sigue estos pasos para correr el proyecto localmente:

```bash
# 1️⃣ Clona el repositorio (o descarga el ZIP)
git clone https://github.com/Nombiembre/laravelPrueba.git

# 2️⃣ Entra al proyecto
cd laravelPrueba

# 3️⃣ Instala las dependencias de PHP
composer install

# 4️⃣ Instala las dependencias de Node
npm install
```

---

## 🔑 Configuración del entorno

1. Duplica el archivo `.env.example` y renómbralo a `.env`:

   ```bash
   cp .env.example .env
   ```

2. Configura las variables de entorno en el archivo `.env` según tu base de datos de **XAMPP**, por ejemplo:

   ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
   ```

---

## 🧱 Migraciones y datos de ejemplo

Crea las tablas de la base de datos e inicializa la seed:

```bash
php artisan migrate
```


```bash
php artisan db:seed
```

---

## 🖥️ Ejecutar el proyecto

Inicia el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

Luego abre en tu navegador:

👉 [http://localhost:8000](http://localhost:8000)

Para poder ver los estilos de TailWind es necesario ejecutra en otra terminal:

```bash
npm run dev
```

---


## 🧠 Funcionalidades principales

* Crear **empresas**
* Crear **vacantes**
* Registrar **participantes**
* Cálculo automático del campo `es_joven`
* Validación de formularios
* Paginación de registros ordenados por `created_at`

---
