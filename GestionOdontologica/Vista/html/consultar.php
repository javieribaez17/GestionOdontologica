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
                <li><a href="index.php?accion=asignar">Asignar cita</a></li>
                <li class="activa"><a href="index.php?accion=consultar">Consultar cita</a></li>
                <li><a href="index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Consultar Cita</h2>
                <from action="index.php?accion=consultarCita" method="post" id="frmconsultar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="consultarDocumento" id="consultarDocumento"/></td>
                        </tr>                        
                       <tr>
                           <td colspan="2">
                               <input type="submit" name="consultarConsultar" value="Consultar" id="consultarConsultar"/>
                           </td>
                       </tr>
                       <tr><td colspan="2"><div id="paciente2"></div></td></tr>
                    </table>
                </from>          
            </div>            
        </div>
    </body>
</html>
