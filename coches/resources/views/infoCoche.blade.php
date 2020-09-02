<!DOCTYPE html>
<html>
    <body>

    <div class="content">
        <div class="title m-b-md">
            <h1>Coches</h1>
        </div>
        </br>
        <p>S'ha afegit el coche amb la seguent informació:</p>
        <ul>
                <li>Make: {{ $coche->make }} </li>
                <li>Model: {{ $coche->model }} </li>
                <li>Produced on: {{ $coche->produced_on }} </li>
        </ul>
 
    </div>
    </body>
</html>
