<?php
    session_start();
    if (isset($_SESSION['nombreusuario'])!=true){
      header("location:index.html");
    }
    else{
      $nombre=$_SESSION['nombreusuario'];
      include 'tablas.php';
    }

?>



<!doctype html>
<html lang="es">
    <!-- cabecera de la pagina  -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity=
    "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="datatables/datatables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.2/css/select.dataTables.min.css">
    



    <title>Biblioteca!</title>
  </head>
  <!-- cuerpo de la pagina  -->

  <body>
    <header>
        <h1 class= "text-center">Bienvenido:<?php echo $nombre?></h1>
        <h2 class= "text-center">Bliblioteca Pública Virgilio Barco</h2>
       
    </header>
    
    <div class="container">
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                    <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
                    Libros
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
                    Editoriales
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                    <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                    <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                </svg>
                    Categorías
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="vale-tab" data-bs-toggle="tab" data-bs-target="#vale" type="button" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                    Usuarios
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="esteban-tab" data-bs-toggle="tab" data-bs-target="#esteban" type="button" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
                    <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                </svg>
                    Ejemplares
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="anto-tab" data-bs-toggle="tab" data-bs-target="#anto" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                    Prestamos
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- Libros -->
                <div class="row">
                    <div class="col">
                        <h1 class= "text-center text-secondary">Tabla:<?php echo $tabla;?></h1>
                        <div class="tableresponsive">
                            <table id="example" class="table table-striped table-bordered table-hover table-primary" style="width:100%">
                                <thead> 
                                    <tr>
                                        <th class="c">ISBN</th>
                                        <th>Título</th>
                                        <th>Autor</th>
                                        <th>IDCategorÍa</th>
                                        <th>IDEditorial</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0;$i<$n;$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $resultado[$i] ['isbn']?></td>
                                        <td><?php echo $resultado[$i] ['titulo']?></td>
                                        <td><?php echo $resultado[$i] ['autor']?></td>
                                        <td><?php 
                                            switch ($resultado[$i] ['idcategoria']){
                                            case 1: echo "Generalidades"; break;
                                            case 2: echo "Filosofía y Psicología "; break;
                                            case 3: echo "Religión"; break;
                                            case 4: echo "Ciencias sociales"; break;
                                            case 5: echo "Lenguas"; break;
                                            case 6: echo "Matemáticas"; break;
                                            case 7: echo "Ciencias naturales"; break;
                                            case 8: echo "Tecnología y ciencias aplicadas"; break;
                                            case 9: echo "Artes"; break;
                                            case 10: echo "Literatura"; break;
                                            case 11: echo "Historia y geografía"; break;
                                            }
                                        ?></td>
                                        <td><?php echo $resultado[$i] ['ideditorial']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody> <!-- tbody-->
                            </table> <!-- table id -->
                        </div> <!-- divv class table respondive -->
                    </div> <!-- div clas col-->
                </div> <!-- div class row-->
            </div>  <!--- div libro --->


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- editoriales -->
                <div class="row">
                    <div class="col">
                        <h1 class= "text-center text-secondary">Tabla:<?php echo $tabla1;?></h1>
                        <div class="tableresponsive">
                            <table id="example1" class="table table-striped table-bordered table-hover table-primary" style="width:100%">
                                <thead> 
                                    <tr>
                                        <th>IDEditorial</th>
                                        <th>Nombre Editorial</th>
                                        <th>Correo</th>
                                        <th>Año de publicación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0;$i<$n1;$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $resultado1[$i] ['ideditorial']?></td>
                                        <td><?php echo $resultado1[$i] ['nombre']?></td>
                                        <td><?php echo $resultado1[$i] ['correo']?></td>
                                        <td><?php echo $resultado1[$i] ['año']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody> <!-- tbody-->
                            </table> <!-- table id -->
                        </div> <!-- divv class table respondive -->
                    </div> <!-- div clas col-->
                </div> <!-- div class row-->
            </div>  <!--- div editorial--->


            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <!-- categoria -->
                <div class="row">
                    <div class="col">
                        <h1 class= "text-center text-secondary">Tabla:<?php echo $tabla2;?></h1>
                        <div class="tableresponsive">
                            <table id="example2" class="table table-striped table-bordered table-hover table-primary" style="width:100%">
                                <thead> 
                                    <tr>
                                        <th>IDCategoría</th>
                                        <th>Nombre de la Categoría</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0;$i<$n2;$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $resultado2[$i] ['idcategoria']?></td>
                                        <td><?php echo $resultado2[$i] ['nombre_categoria']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody> <!-- tbody-->
                            </table> <!-- table id -->
                        </div> <!-- divv class table respondive -->
                    </div> <!-- div clas col-->
                </div> <!-- div class row-->
            </div>  <!--- div categoria--->


            <div class="tab-pane fade" id="vale" role="tabpanel" aria-labelledby="vale-tab">
                <!-- usuario -->
                <div class="row">
                    <div class="col">
                        <h1 class= "text-center text-secondary">Tabla:<?php echo $tabla3;?></h1>
                        <div class="tableresponsive">
                            <table id="example3" class="table table-striped table-bordered table-hover table-primary" style="width:100%">
                                <thead> 
                                    <tr>
                                        <th>RUT</th>
                                        <th>Nombre completo</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0;$i<$n3;$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $resultado3[$i] ['rut']?></td>
                                        <td><?php echo $resultado3[$i] ['nombre']?></td>
                                        <td><?php echo $resultado3[$i] ['direccion']?></td>
                                        <td><?php echo $resultado3[$i] ['telefono']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody> <!-- tbody-->
                            </table> <!-- table id -->
                        </div> <!-- divv class table respondive -->
                    </div> <!-- div clas col-->
                </div> <!-- div class row-->

            </div>  <!--- div usuario--->


            <div class="tab-pane fade" id="esteban" role="tabpanel" aria-labelledby="esteban-tab">
                <!-- copia libro -->
                <div class="row">
                    <div class="col">
                        <h1 class= "text-center text-secondary">Tabla:<?php echo $tabla4;?></h1>
                        <div class="tableresponsive">
                            <table id="example4" class="table table-striped table-bordered table-hover table-primary" style="width:100%">
                                <thead> 
                                    <tr>
                                        <th>ISBN</th>
                                        <th>Número</th>
                                        <th>Estado</th>
                                        <th>Disponible</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0;$i<$n4;$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $resultado4[$i] ['isbn']?></td>
                                        <td><?php echo $resultado4[$i] ['numero']?></td>
                                        <td><?php echo $resultado4[$i] ['estado']?></td>
                                        <td><?php echo $resultado4[$i] ['disponible']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody> <!-- tbody-->
                            </table> <!-- table id -->
                        </div> <!-- divv class table respondive -->
                    </div> <!-- div clas col-->
                </div> <!-- div class row-->
            </div>  <!--- div copia libro--->


            <div class="tab-pane fade" id="anto" role="tabpanel" aria-labelledby="anto-tab">
                <!-- prestamo -->
                <div class="row">
                    <div class="col">
                        <h1 class= "text-center text-secondary">Tabla:<?php echo $tabla5;?></h1>
                        <div class="tableresponsive">
                            <table id="example5" class="table table-striped table-bordered table-hover table-primary" style="width:100%">
                                <thead> 
                                    <tr>
                                        <th>ISBN</th>
                                        <th>RUT</th>
                                        <th>Fecha del prestamo</th>
                                        <th>Fecha de devolución</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0;$i<$n5;$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $resultado5[$i] ['isbn']?></td>
                                        <td><?php echo $resultado5[$i] ['rut']?></td>
                                        <td><?php echo $resultado5[$i] ['fecha_prestamo']?></td>
                                        <td><?php echo $resultado5[$i] ['fecha_devolucion']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody> <!-- tbody-->
                            </table> <!-- table id -->
                        </div> <!-- divv class table respondive -->
                    </div> <!-- div clas col-->
                </div> <!-- div class row-->
            </div>  <!--- div prestamo--->
        </div>  <!--- div tab-content--->
    </div>  <!--- div container--->
    



    
    

    <!-- libreria java script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity=
    "sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity=
    "sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="datatables/datatables.min.js"></script>


   <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
   <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
   <script src="https://cdn.datatables.net/select/1.3.2/js/dataTables.select.min.js"></script>


    <script src="main.js"></script>
    <script src="main1.js"></script>
    <script src="main2.js"></script>
    <script src="main3.js"></script>
    <script src="main4.js"></script>
    <script src="main5.js"></script>
    
    <footer>
    <p>Más informacion en: https://www.biblored.gov.co/</p>
  </footer>
  </body>
  <a class ="btn btn-prymary btn-lg btn-block" href="terminar.php" role="button" style="float:right; margin-righy:25px; background-position: 100px 30px; background-color:rgb(138, 30, 30);color: white;border: 1px solid white;">Salir del sistema</a>
</html>