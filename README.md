# Formulario de contacto

**Configuración**

- Crear base de datos MYSQL
- Importar el archivo biblioteca.sql
- Configurar base de datos en el archivo de configuración: /config/database.php

**Tiempo de desarrollo estimado**

- FrontEnd
```
HTML FORM: 20 MINUTOS
JAVASCRIPT: 35 MINUTOS
CSS: 20 MINUTOS
```

- BackEnd
```
server.php: 15 MINUTOS
DATABASE: 10 MINUTOS
```

**Notas**

- No se está usando la API: [http://country.io/names.json](http://country.io/names.json) 
```
Razones:
1. No tiene SSL por lo que entra en conflictos al tratar de consumirla desde sitios seguros.
2. Al intentar consumir la api ha sido bloqueado por la política de CORS.  
esto sucede porque la API no cuenta con un encabezado 'Access-Control-Allow-Origin: *'
```
- En su lugar copié el JSON y subí la API a mi propio dominio que si cuenta con los encabezados CORS.  
 con el fin de usar la estructura de la API solicitada en la prueba 2:  
 [https://developerdorado.com/country/api.php](https://developerdorado.com/country/api.php) 
 