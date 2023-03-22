# Layout

* Creamos el layout siguiendo las especificaciones
* Para ello añadimos las clases en [tailwind.config.js](../tailwind.config.js)

 ```json
{
  height: {
    '10vh': '10vh',
    '15vh': '15vh',
    '65vh': '65vh'
  },
  colors: {
    "header": "#E6621F",
    "nav": "#EDEDEE",
    "main": "#FFFFFF",
    "footer": "#898989"
  }
}
```
* Establecemos el [layout.blade.php](../resources/views/layout.blade.php)
* Lo probamos
1. Creo una nueva ruta que retorne una página que extienda de layout 
 1. Creamos la ruta
```php
 Route::view("main","empresa.main");
```
 2. Creo la página [main.blade.php](../resources/views/empresa/main.blade.php) que extienda de layout 
2. Lo probamos http://localhost:8000/main