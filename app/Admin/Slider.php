<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Slider;

AdminSection::registerModel(Slider::class, function (ModelConfiguration $model) {
    $model->setTitle('Слайдер');

// Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-primary');
        $display->setOrder([[1, 'desc']]);

        $display->setColumns([
            AdminColumn::text('title')->setLabel('Описание'),
            AdminColumn::image('image')->setLabel('Изображение')
        ]);

        $display->paginate(30);
        return $display;
    });
// Create And Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::text('title', 'Название:'),
            AdminFormElement::text('subtitle','Если надо:'),
            AdminFormElement::textarea('desk', 'Описание:'),
            AdminFormElement::image('image', 'Изображение:')
       );
        return $form;
    });
})
    ->addMenuPage(Slider::class, 0)
    ->setIcon('fa fa-child');