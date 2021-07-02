<form action="" enctype="multipart/form-data" class="no-color-changes section admin-form" method="post">
<input type="hidden" name="form-type" value="new-promo">
<?php if(!empty($filemess)): ?>
    <p class="mess"> <?= $filemess ?> </p>
<?php endif; ?>
<label for="tit">Заголовок акции</label>
<input required class="pr-l-pink" type="text" name="title" id="tit">
<label for="des">Описание</label>
<input required class="pr-l-pink" type="text" name="description" id="des">
<label for="disc">Скидка</label>
<input required class="pr-l-pink" type="text" name="discount" id="disc">
<label for="img">Изображение</label>
<input required class="pr-l-pink" type="file" name="image" id="img" accept="image/jpeg">

<label for="start">Дата начала</label>
<input required class="pr-l-pink" type="date" name="start-date" id="start">
<label for="end">Дата окончания</label>
<input required class="pr-l-pink" type="date" name="exp-date" id="end">

<button class="pr-mag" type="submit">Сохранить</button>
</form>