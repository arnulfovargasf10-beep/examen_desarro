<?php

namespace App\Http\Controllers;
use App\ProductosControllers\Controllers;

abstract class Controller
{
    create::schema(id, nombre, fecha_vencimiento, fecha_elaborada, cant_producto)
    {  
        id,
        nombre,
        fecha_vencimiento,
        fecha_elaborada,
        cant_producto,
    }    
}
