<table class="table table-responsive table-bordered" style="background-color: #E8FBFA;">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ($usuario2 as $usuario)
            {
                echo "<tr>";
                echo"<td>".$usuario['nombre'];
                echo"<td>".$usuario['apellidos'];
                echo"<td>".$usuario['correo'];
                echo "</tr>";
            }
        ?>
    </tbody>
</table>