<?
$this->load->helper('form');
?>

<!DOCTYPE html>
<html lang="ru">

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <h3>Административный раздел</h3>

            <?
                $ar = array('class' => 'btn btn-primary');
                echo anchor('categ','Категории товаров',$ar);
            ?>

            <?
            $ar = array('class' => 'btn btn-primary');
            echo anchor('#','Товары',$ar);
            ?>

            <?
                $ar = array('class' => 'btn btn-primary');
                echo anchor('#','Администраторы',$ar);
            ?>

</div>

</body>
</html>
