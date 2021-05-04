<?php


class FundamentalPatternsController
{
    public function propertyContainer()
    {
        $name = 'Контейнер свойств';

        $item = new BlogPost();

        $item->setTitle('Заголовок статьи');
        $item->setCategoryId(10);

        $item->addProperty('date', '2021-05-04');
        $item->addProperty('frame', '59');
        $item->addProperty('status', '1');

        $item->updateProperty('status', '0');
        $item->deleteProperty('frame');

    }

    public function delegation()
    {
        $name = 'Делегирование';

        $instance = new AppMessenger();
        $instance->setSender('sender@mail.ru')
            ->setRecipient('recipient@mail.com')
            ->setMessage('message')
            ->send();

        $instance->bySms()
            ->setSender('sender')
            ->setRecipient('blender')
            ->setMessage('gender')
            ->send();
    }
}