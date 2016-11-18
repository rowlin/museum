<?php
use SleepingOwl\Admin\Model\ModelConfiguration;
use App\CursModel as Curs;

AdminSection::registerModel(Curs::class, function (ModelConfiguration $model) {
    $model->setTitle('Экскурсии');

// Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-primary');
        $display->setOrder([[1, 'desc']]);

        $display->setColumns([
            AdminColumn::text('name')->setLabel('Название'),
            AdminColumn::datetime('start')->setLabel('Начало'),
            AdminColumn::datetime('end')->setLabel('Конец'),
        ]);

        $display->paginate(30);
        return $display;
    });
// Create And Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminColumn::text('name')->setLabel('Название:'),
            AdminFormElement::text('title', 'Описание:'),
            AdminFormElement::text('name_org','Название организации(если надо):'),
            AdminFormElement::textarea('post', 'Пост :'),
            AdminFormElement::datetime('start', 'Время начала :'),
            AdminFormElement::datetime('end', 'Время конца :'),
            AdminFormElement::images('image', 'Изображения:'),
            AdminFormElement::boolean('public', 'Опубликовать :')

       );
        return $form;
    });
})
    ->addMenuPage(Curs::class, 0)
    ->setIcon('fa fa-child');




?>