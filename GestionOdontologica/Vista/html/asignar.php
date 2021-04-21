<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistemas de Gestión Odontológica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">                
                <h1>Sistema de Gestión Odontológica</h1>
            </div>
            <ul id="menu">
                <li><a href="index.php">Inicio</a></li>
                <li class="activa"><a href="index.php?accion=asignar">Asignar cita</a></li>
                <li><a href="index.php?accion=consultar">Consultar cita</a></li>
                <li><a href="index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Asignar Cita</h2>
                <form action="index.php?accion=guardarCita" method="post" id="frmasignar"></form>
                <table>
                    <tr>
                        <td>Documento del paciente</td>
                        <td><input type="text" name="asignarDocumento" id="asignarDocumento"/></td>
                    </tr>
                    <tr>
                        <td Colspan="2">
                            <input type="button" name="asignarConsultar" value="consultar" id="asignarConsultar"/>
                        </td>                        
                    </tr>
                    <tr><td colspan="2"><div id="paciente"></div></tr>                                        
                    <tr>
                        <td>Médico</td>
                        <td>
                            <select id="medico" name="medico"><ul>
                                    <option value="-1" selected="selected">---Seleccione el médico---</option>
                                    <option value="12345">12345 Camilo Robledo</option>
                                    <<option value="67890">67890 Esteban Salgado</option>
                            </select>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Fecha</td>
                        <td><input type="text" name="fecha" id="fecha"></td>
                    </tr>                    
                    <tr>
                        <td>Hora</td>
                        <td>
                            <select id="hora" name="hora">
                                <<option value="-1" selected="selected">---Seleccione la hora---</option>
                                <option>08:00:00</option>
                                <option>08:20:00</option>
                                <option>08:40:00</option>
                                <option>09:00:00</option>                                
                            </select>
                        </td>                        
                    </tr>                    
                    <tr>
                        <td>Consultorio</td>
                        <td>
                             <select id="consultorio" name="consultorio">
                                <<option value="-1" selected="selected">---Seleccione el consultorio---</option>
                                <option value="1">1 Consultas1</option>
                                <option value="2">2 Tratamiento2</option>                                
                            </select>                            
                        </td>
                    </tr>                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" id="asignarEnviar" name="asignarEnviar" value="Enviar">
                        </td>
                    </tr>
                </table>                
            </div>            
        </div>
    </body>
</html>
