# YandexMetrikaBundle

Bundle для простой установки счетчика метрики.

## Установка для Symfony 2.0

### Файл deps

    [YandexMetrikaBundle]
        git=git://github.com/KonstantinKuklin/YandexMetrikaBundle
        target=/bundles/KonstantinKuklin/Bundle/YandexMetrikaBundle

### Файл autoload.php

    'KonstantinKuklin'                          => __DIR__.'/../vendor/bundles',

### Файл AppKernel.php

Добавьте YandexMetrikaBundle() в тело метода `registerBundles()`:

    new KonstantinKuklin\Bundle\YandexMetrikaBundle\YandexMetrikaBundle(),

## Полный app/config.yml

    yandex_metrika:
        id:                  123123123 # Ваш ID
        webvisor:            false # Вебвизор
        clickmap:            true # Карта вкликов
        trackLinks:          true # Внешние ссылки, загрузки файлов и отчет по кнопке поделиться
        accurateTrackBounce: true # Точный показатель отказов
        trackHash:           true # Отслеживание хеша в адресной строке

## Необходимый минимум app/config.yml

    yandex_metrika:
        id:                  123123123 # Ваш ID
