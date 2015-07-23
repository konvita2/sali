<?
    $this->load->helper('form');
?>

<!DOCTYPE html>
<html lang="ru">

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <?

    if($mode == 'ed' OR $mode == 'dl'){
        $id = $cat_elem['id'];
        $nam = $cat_elem['nam'];
    }
    elseif($mode == 'nw'){
        $id = 0;
        $nam = '';
    }

    ?>

    <h3>Редактирование категории</h3>

    <p style="color: red;"> <!-- @todo change to div -->
    <?
        echo validation_errors();
    ?>
    </p>

    <?
        $arForm = array('class' => 'form-horizontal');
    ?>

    <?
    // form open
    if($mode == 'ed') echo form_open("categ/edit/$id",$arForm);
    if($mode == 'nw') echo form_open("categ/add/$parent_id",$arForm);
    ?>

        <div class="form-group">
            <label for="catId" class="col-sm-2 control-label">Код:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" readonly
                       id='catId' name="id" value="<?=$id?>"/>
            </div>
        </div>

        <div class="form-group">
            <label for="catNam" class="col-sm-2 control-label">Наименование:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id='catNam'
                       name="nam" value="<?=$nam?>"/>
            </div>
        </div>

        <div class="form-group">
            <label for="catParent" class="col-sm-2 control-label">Родительская категория:</label>
            <div class="col-sm-4">
                <select class="form-control" name="parent_id" id="catParent">
                    <?= $top_level_cats ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button type="submit" class="btn btn-primary" name="btn_save">Сохранить</button>
                <?
                    $ar = array(
                        'class' => 'btn btn-primary',
                    );
                    echo anchor('categ', 'Отмена', $ar);
                ?>
            </div>
        </div>

    </form>


</div>

</body>
</html>