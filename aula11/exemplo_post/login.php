<?php 

if(isset($POST['usuario'])){
    if ($_POST['usuario'] == "adimin" && $_POST['senha'] ===123){
    echo "Usuário logado";
}
else{
    echo "Usuário ou senha inválidos"
}
}else{
    header("location: form.html");
}
