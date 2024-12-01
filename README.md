## PASOS:

- CREAR BASE DE DATOS:
```
laravelcrud
```
- EJECUTAR MIGRACIONES Y DATOS DE PRUEBA:
```
php artisan migrate --seed
```
- LEVANTAR SERVIDOR
```
php artisan serve
```
- ENDPOINTS
```
GET    /api/users      – Listar todos los usuarios.
GET    /api/users/{id} – Ver detalles de un usuario.
POST   /api/users      – Crear un usuario.
PUT    /api/users/{id} – Actualizar un usuario.
DELETE /api/users/{id} – Eliminar un usuario.
```