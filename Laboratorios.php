<?php 
include "includes/ConectBd.php";
include "includes/consultas.php";
include "includes/acciones.php";




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/Config.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <title>Laboratorios | CherryTree Software</title>
</head>
<body>
    <div class="container">
        <div class="row mt-2">
            <?php echo $MensajeLab; ?>
        </div>
        <div class="row mt-3">
            <h2 class="display-6 text-center">Registro de laboratorios</h2>
        </div>
    </div>
    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-sm-10 col md-10 col-lg-10">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="Post">
               <div class="row d-flex justify-content-center">
                     <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="NomLaboratorio" id="NomLaboratorio" Placeholder="Nombre del Laboratorio" class="form-control">
                     </div>
               </div>
               <div class="row mt-2">
                <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
                    <select name="Plantel" id="Plantel" class="form-select">
                         <option value="">Selecciona un Plantel</option>
                         <?php while($lineaPlantel = $EPlanteles->fetch_assoc()){  ?>
                             <option value="<?php echo $lineaPlantel['Id_Plantel'] ?>"><?php echo $lineaPlantel['NombrePlantel']; ?></option>
                         <?php } ?>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
                    <select name="Carrera" id="Carrera" class="form-select">
                        <option value="">Selecciona una carrera</option>
                        <?php while($LineaCarrera = $ECarreras->fetch_assoc()){ ?>
                          <option value="<?php echo $LineaCarrera['Id_Carrera']?>"><?php echo $LineaCarrera['NombreCarrera']; ?></option>    
                        <?php } ?>
                    </select>
                </div>
               </div>
               <div class="row mt-4">
                  <input type="submit" value="Registrar" class="btn btn-sm btn-success" name="btnIngresarLab">
               </div>
            </form>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <table class="table">
                  <thead>
                    <tr>
                       <th scope="col">Nombre laboratorio</th>
                       <th scope="col">Nombre Plantel</th>
                       <th scope="col">Nombre carrera</th>
    
                    </tr>
                 </thead>
                 <tbody>
                    <?php while($linealab = $EInnerLab->fetch_array()){ ?>
                    <tr>
                      <th scope="row"><?php echo $linealab['NombreLaboratorio'];  ?></th>
                      <th scope="row"><?php echo $linealab['NombrePlantel'];  ?></th>
                      <th scope="row"><?php echo $linealab['NombreCarrera'];  ?></th>
                      <th scope="row">
                        <a href="editarlab.php?id_laboratorio=<?php echo $linealab['Id_Laboratorio'];?>">
                        Editar</a> - 
                        Eliminar</th>
                    </tr>
                    <?php } ?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>

<script src="js/dark-mode.js"></script>
<script src="js/pace.js"></script>
</body>
</html>