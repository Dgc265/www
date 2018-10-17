<?php
    $dir_subida='./www/ejercicios4/imagenes';
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

    echo '<pre>';

    if(move_uploaded_file($_FILES['fichero_usuario']['tmp_name'],$fichero_subido))
{
    echo "el fichero es válido y se subio con éxito.\n";
}else{
    echo "Posible ataque de subida de fichero!\n";
}    

echo 'mas informacion de depuracion:';
print_r($_FILES);

print "</pre>";
?>