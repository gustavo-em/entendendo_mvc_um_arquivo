<?php

//model
class Model{
    public function usuarios(){
        return array(
            'Gustavo',
            'Guilherme',
            'pode'
        );
    }
}

//controller
class Controller{
    public function home(){
        $model = new Model;
        $lista_usuarios = $model->usuarios();
        return $lista_usuarios;
    }
}

//view

$controller = new Controller;
$usuarios = $controller->home();


print_r($usuarios);


?>

<?php if($usuarios[2] == 'pode'){ ?>

    <h1>Lista de usuarios</h1>
<?php } ?>

<ul>
    <?php foreach($usuarios as $user){ ?>
        <li><?php echo $user ?></li>
        
    <?php } ?>
</ul>




