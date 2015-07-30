<!DOCTYPE html>
<html lang="ru">

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <?

    if($mode == 'dl' || $mode == 'ed')
    {
        $id = $row['id'];
        $art = $row['art'];
        $title = $row['title'];
        $category_id = $row['category_id'];
        $category_name = $row['category_name'];
        $description = $row['description'];
        $price = $row['price'];
    }
    ?>

    <h1>Товар:
    <? if($mode == 'ed') echo 'редактирование'; ?>
    <? if($mode == 'nw') echo 'добавление'; ?>
    <? if($mode == 'dl') echo 'удаление'; ?>
    </h1>

    <?
    // form_open
    if($mode == 'ed'){
        $ar = array('class' => 'form-horizontal', 'role' => 'form');
        echo form_open("goods/edit/$id", $ar);
    }
    ?>

        <div class="form-group">
            <label class="control-label col-sm-2" for="id">Код:</label>
            <div class="col-sm-2">
                <input readonly type="text" class="form-control" id="id"
                       name="id" value="<?=$id?>"/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="art">Артикул:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="art" name="art"
                    value="<?=$art?>"/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Наименование:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title"
                    value="<?=$title?>" />
            </div>
        </div>

         <div class="form-group">
            <label class="control-label col-sm-2" for="description">Описание товара:</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control">
                    <?=$description?></textarea>
            </div>
         </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="price">Цена:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="price" name="price"
                       value="<?=$price?>" />
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="category">Категория:</label>
            <div class="col-sm-4">
                <select class="form-control" id="category" name="category_id">
                    <?=$category_list?>
                </select>
            </div>
        </div>




    <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">
                    <? echo $mode == 'dl' ? 'Удалить' : 'Сохранить'; ?>
                </button>

                <?
                $ar = array('class' => 'btn btn-primary');
                echo anchor('goods/index','Отмена',$ar);
                ?>
            </div>
        </div>


    <?
    form_close();
    ?>


</div>

</body>
</html>