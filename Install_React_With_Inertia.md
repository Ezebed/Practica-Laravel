# Instalar Laravel + React + Inertia

## crear la aplicacion

```bash 
composer create-project laravel/laravel react-inertia-app
# Or you can just use Laravel CLI
laravel new react-inertia-app
cd react-inertia-app
```

## cnfiguracin del lado del servidor

```bash
composer require inertiajs/inertia-laravel
```

renombramos el documento welcome.blade.php => app.blade.php y agregamos lo siguiente

```php
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @viteReactRefresh 
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
        <!-- As you can see, we will use vite with jsx syntax for React-->
        @inertiaHead
    </head>
    <body>
        @inertia
    </body>
</html>
```

generamos el middlewaede inertia

```bash
php artisan inertia:middleware
```
abrimos el archivo App/Http/Kernel.php y agregamos el middleware en el grupo de web

```php
<?php

// ...
'web' => [
    // ...
    \App\Http\Middleware\HandleInertiaRequests::class,
],
// ...
```

## configuracion del lado del cliente

instalamos las dependencias

```bash
npm install @inertiajs/inertia-react @inertiajs/react @vitejs/plugin-react react react-dom
```

configuamos Vite en vite.config.js con lo siguiente

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        react(), // React plugin that we installed for vite.js
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

cambiamos el nombre de app.js => app.jsx

```jsx
import React from 'react'
import {createRoot} from 'react-dom/client'
import {createInertiaApp } from '@inertiajs/inertia-react'
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers'

createInertiaApp({
    // Below you can see that we are going to get all React components from resources/js/Pages folder
    resolve: (name) => resolvePageComponent(`./Pages/${name}.jsx`,import.meta.glob('./Pages/**/*.jsx')),
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />)
    },
})
```

creamosla carpeta "Pages" dentro de la carpeta "js" y  creamos el archivo Test.jsx

```jsx
import React, { useState } from 'react';

const Test = () => {
    return (
        <h1>This is test component</h1>
    )
}

export default Test
```


## renderizamos el componente

agegamos las ruta en el archivo "routes/web.php" 

```php
<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia; // We are going to use this class to render React components

Route::get('/', function () {
    return Inertia::render('Test'); // This will get component Test.jsx from the resources/js/Pages/Test.jsx
});
```


finalmente iniciamos el servidor local 

```bash
php artisan serve
npm run dev
```