<!DOCTYPE html>
<html lang="ru">

<?
    $this->load->helper('form');
?>

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">


    <h3>Редактирование категории</h3>

    <?
        $arForm = array('class' => 'form-horizontal');
    ?>

    <? echo form_open('categ/categ_edit',$arForm); ?>

        <div class="form-group">
            <label for="catId" class="col-sm-2 control-label">Код:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" readonly
                       id='catId' name="id" value="<?php echo $cat_elem['id']; ?>"/>
            </div>
        </div>

        <div class="form-group">
            <label for="catNam" class="col-sm-2 control-label">Наименование:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id='catNam'
                       name="nam" value="<? echo $cat_elem['nam']; ?>"/>
            </div>
        </div>

        <div class="form-group">
            <label for="catParent" class="col-sm-2 control-label">Родительская категория:</label>
            <div class="col-sm-4">
                <select class="form-control" name="parent_nam" id="catParent">
                    <?= $top_level_cats ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button type="submit" class="btn btn-primary" name="btn_save">Сохранить</button>
                <button type="button" class="btn btn-primary">Отмена</button>
            </div>
        </div>

    </form>


</div>

</body>
</html>