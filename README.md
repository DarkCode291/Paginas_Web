# Xinyang Restaurante Chino - Proyecto PHP MVC

Proyecto académico de página web para restaurante desarrollado con:

- HTML
- Bootstrap 5
- PHP
- MySQL
- XAMPP
- Docker
- Arquitectura MVC: Modelo, Vista y Controlador

## Adaptación realizada

El template original Savora fue modificado para representar la identidad del restaurante chino Xinyang. Se integraron las imágenes suministradas en el documento de Word: ubicación, métodos de pago, horario, fotografías del menú y piezas gráficas de platos como arroz chino tradicional, arroz chino con camarón, valenciana, combinados, platos especiales, chow mein, espaguetti chino, chop suey, lumpia, adicionales y bebidas.

## Ejecutar con XAMPP

1. Copiar la carpeta `Xinyang_MVC_Restaurante` dentro de `C:\xampp\htdocs\`.
2. Abrir XAMPP e iniciar Apache y MySQL.
3. Entrar a phpMyAdmin: `http://localhost/phpmyadmin`.
4. Importar el archivo `database/schema.sql`. Este archivo crea la base de datos `xinyang_db`.
5. Abrir en el navegador:

```text
http://localhost/Xinyang_MVC_Restaurante/
```

También puede abrirse directamente desde:

```text
http://localhost/Xinyang_MVC_Restaurante/public/
```

## Ejecutar con Docker

Desde la carpeta del proyecto ejecutar:

```bash
docker compose up --build
```

Luego abrir:

```text
http://localhost:8080
```

phpMyAdmin queda disponible en:

```text
http://localhost:8081
```

Credenciales Docker:

```text
Servidor: db
Base de datos: xinyang_db
Usuario: xinyang_user
Contraseña: xinyang_pass
```

## Explicación MVC para exposición

- **Modelo:** contiene la conexión a MySQL y las clases que consultan o guardan datos: `Database`, `MenuItem`, `Reservation`, `ContactMessage`.
- **Vista:** contiene la interfaz visual: `app/Views/home/index.php`, `header.php` y `footer.php`.
- **Controlador:** recibe la solicitud del usuario, llama al modelo y carga la vista correspondiente: `HomeController`, `ReservationController`, `ContactController`.

## Funcionalidades

- Página principal adaptada a Xinyang.
- Menú dinámico cargado desde MySQL.
- Galería con imágenes reales del restaurante/menú.
- Formulario de reservas o pedidos guardado en base de datos.
- Formulario de contacto guardado en base de datos.
- Diseño responsive con Bootstrap 5.
- Compatible con XAMPP y Docker.
