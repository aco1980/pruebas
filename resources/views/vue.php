<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>VueJs.org curso práctico</title>
</head>
<body>
<div id="appvue">
<div class="container">
   <div class="row">
        <div class="col">
            <h1 v-if="lists.length > 0">Agregar una tarea</h1> 
            <h1 v-else="lists">Crear una tarea</h1>        
            <p v-if="lists.length == 0" class="alert alert-danger">
                Ingrese una tarea
            </p>
            <p v-if="newKeep.length <= 2" class="alert alert-danger">
                El dato ingresado no es válido
            </p>
            <input type="text" class="form-control" v-model="newKeep" v-on:keyup.enter="addKeep">
        </div>
        <div class="col">
            <h1 v-if="lists.length > 0">Listado de tareas</h1> 
            <h1 v-else="lists">No hay tareas registradas</h1>      
            <ul class="list-group">
                <li class="list-group-item" 
                v-for="item in lists"
                v-bind:class="item.completed == true ? 'list-group-item-success' : ''"
                @click="item.completed =! item.completed">
                {{ item.keep}}
                </li>             

            </ul>
        </div>
    </div> 
    <div class="row">
        <div class="col">
            <hr>
            <pre> 

               {{ $data | json }}
                
            </pre>
        </div>
    </div>
</div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Script VueJs -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>  
<script src="<?php echo asset('js/script.js') ?>"></script>  

</body>
</html>