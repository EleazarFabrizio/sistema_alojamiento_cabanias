<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>

    <link rel="stylesheet" href="/imports/overall style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>

    <h1>Registrar Reserva</h1>

    <div id="lateral_navbar">
        <a href="Gestión de alojamientos.html">Inicio</a>
        <a href="cliente.html">Cliente</a>
        <a href="cliente.html">Habitación</a>
        <a href="cliente.html">Reserva</a>
        <a href="cliente.html">Resúmenes</a>
    </div>

    <form class="formulario" action="index.php" method="POST">

        <div class="reserva_page" style=""> 

            <div class="formulario_heading" >
                <hr>
                <h3>Datos de cliente</h1>
            </div>

            <div class="formulario_cuadricula">

                <div class="formulario_dato">
                    <label for="nombre_input">Nombre</label>
                    <input id="nombre_input" required>
                </div>

                <div class="formulario_dato">
                    <label for="apellido_input">Apellido</label>
                    <input id="apellido_input" required>
                </div>
                
                <div class="formulario_dato">
                    <label for="apellido_direccion">Dirección</label>
                    <input id="apellido_direccion" required>
                </div>

                <div class="formulario_dato">
                    <label for="dni_input">DNI</label>
                    <input id="dni_input" required>
                </div>

                <div class="formulario_dato">
                    <label for="telefono_input">Numero de teléfono</label>
                    <input id="telefono_input" required type="number" class="input_number_normal">
                </div>

                <div class="formulario_dato">
                    <label for="personas_input">Cantidad de personas</label>
                    <input id="personas_input" required type="number" class="input_number_chiquito">
                </div>

                <div class="formulario_dato">
                    <label for="marca_input">Marca y tipo de vehículo</label>
                    <input id="marca_input" required>
                </div>

                <div class="formulario_dato">
                    <label for="patente_input">Numero de patente</label>
                    <input id="patente_input" required>
                </div>

                <div class="formulario_dato">
                    <label for="origen_input">Lugar de origen</label>
                    <input id="origen_input" required>
                </div>

                <div class="formulario_dato">
                    <label for="hora_input">Hora de entrada</label>
                    <input id="hora_input" required>
                </div>

            </div>

        </div>

        <div class="reserva_page" style=""> 

            <div class="formulario_heading" style="margin-top: 1em;">
                <hr>
                <h3>Información de Cobro</h1>
            </div>

            <div class="formulario_cuadricula">

                <div class="formulario_dato">
                    <label for="cabania_input">Cabaña asignada</label>
                    <input id="cabania_input" required>
                </div>
                
                <div class="formulario_dato">
                    <label for="fecha_input">Fecha de llegada</label>
                    <div id="fecha_input_group">
                        <input type="number" class="input_number_normal" required>
                        <p></p>
                        <select name="month" id="cars" style="width: 90px;" required>
                            <option value="0" disabled selected value style="display:none"></option>
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                        <p></p>
                        <input required value="2025" type="number" style="width: 40px;" class="input_number_normal" minlength="4" maxlength="4">
                    </div>
                </div>

                <div class="formulario_dato">
                    <label for="cantidad_noches_input">Cantidad de noches</label>
                    <input id="cantidad_noches_input" required type="number" class="input_number_chiquito">
                </div>

                <div class="formulario_dato">
                    <label for="salida_input">Fecha de salida</label>
                    <input id="salida_input" readonly>
                </div>

                <div class="formulario_dato">
                    <label for="cantidad_cobrada_input">Precio por noche</label>
                    <input id="cantidad_cobrada_input" required type="number" class="input_number_normal">
                </div>
                
                <div class="formulario_dato">
                    <label for="metodo_input">Método de pago</label>
                    <select name="metodo_input" id="metodo_input" style="width: 190px;" required>
                        <option value="0" disabled selected value style="display:none"></option>
                        <option value="1">Efectivo</option>
                        <option value="2">Débito</option>
                        <option value="3">Transferencia</option>
                    </select>
                </div>

                <div class="formulario_dato">
                    <label for="total_input">Total a pagar</label>
                    <input id="total_input"  readonly class="readonly_input" value="$ 80.000">
                </div>

                <div class="formulario_dato">
                    <label for="senia_input">Pagado</label>
                    <input id="senia_input" readonly class="readonly_input" value="$ 5.000">
                </div>

                <div class="formulario_dato">
                    <label for="pagada_input">La Seña ha sido pagada</label>
                    <input id="pagada_input" readonly type="checkbox">
                </div>

                <div class="formulario_dato">
                    <label for="total_pagada_input">El total ha sido pagado</label>
                    <input id="total_pagada_input" readonly type="checkbox">
                </div>

                <div class="formulario_dato">
                    <label for="pendiente_input">Pendiente a Pagar</label>
                    <input id="pendiente_input" readonly class="readonly_input" value="$ 20.000" style="background-color: rgb(255, 226, 226); border-color: rgb(207, 125, 125);">
                </div>

            </div>

        </div>

        <input type="submit">

        <?php

            $db_server = "localhost";
            $db_user = "root";
            $db_password = "";
            $db_name = "cabanias_db";
            $conn = "";

            $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

            if ($conn) {
                echo "you are connected";
            }

            else {
                echo "you are not connected";
            }
        
        ?>

    </form>
    
</body>
</html>