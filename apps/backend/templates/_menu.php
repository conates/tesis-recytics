<ul id="jsddm">
    <li><?php echo link_to('Home', '@inicio') ?>
    </li>
    <li><a href="#">Usuarios</a>
        <ul>
            <li><?php echo link_to('Empleados', '@empleado') ?></li>
            <li><?php echo link_to('Usuario', '@sf_guard_user') ?></li>
            <li><?php echo link_to('Donante', '@usuario') ?></li>
            <li><?php echo link_to('Cliente', '@cliente') ?></li>
        </ul>
    </li>
    <li><a href="#">Ventas</a>
        <ul>
            <li><?php echo link_to('Venta de Equipos', '@ventaequipo') ?></li>
            <li><?php echo link_to('Venta de Piezas', '@ventapieza') ?></li>
            <li><?php echo link_to('Venta de Chatarra', '@ventachatarra') ?></li>
        </ul>
    </li>
    <li><?php echo link_to('Piezas', '@pieza') ?></li>
    <li><?php echo link_to('Container', '@container') ?></li>
    <li><?php echo link_to('Equipo', '@equipo') ?></li>
    <li><?php echo link_to('Categorias', '@categoria') ?></li>
    <li><?php echo link_to('Salir', '@sf_guard_signout') ?></li>
</ul>












