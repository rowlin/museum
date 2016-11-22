<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\EventModel as Event;

AdminSection::registerModel(Event::class, function (ModelConfiguration $model) {
    $model->setTitle('Мероприятия');

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
            AdminFormElement::text('name')->setLabel('Название:'),
            AdminFormElement::text('title', 'Описание:'),
            AdminFormElement::text('name_org','Название организации(если надо):'),
            AdminFormElement::textarea('post', 'Пост :'),
            AdminFormElement::text('post2', 'URL :'),
            AdminFormElement::select('age','Возрастная категория :' )->setOptions(['18-22', '22-28', '28-45']),
            AdminFormElement::date('start_date', 'Дата начала :'),
            AdminFormElement::time('start_time', 'Время:'),
            AdminFormElement::date('end_date', 'Дата конца :'),
            AdminFormElement::time('end_time', 'Время:'),
            AdminFormElement::images('image', 'Изображения:'),
            AdminFormElement::checkbox('public', 'Опубликовать :'),
            AdminFormElement::select('type','Категория' )->setOptions(['Экскурсии', 'Встречи', 'Выставки','Сходки'])
       );
        return $form;
    });
})
    ->addMenuPage(Event::class, 0)
    ->setIcon('fa fa-child');






?>