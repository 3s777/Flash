# Flash - класс для работы с сообщениями в сессии

Класс позволяет удобно взаимодейстовать с базой данных: получать, добавлять и редактировать данные

## Настройка:

Для начала работы с классом его нужно скачать и перенести в проект.
В самом проекте необходимо подключиться к классу, затем создать новые объект класса.
Можно пользоваться методами в статическом виде

##### Пример использоваиня:

```php
    include 'Flash.php';
    $message = new Flash();
```

## Методы класса

### set_flash_message

Устанавливает в сессию сообщение и его тип

##### Пример использоваиня:
```php
    $message->set_flash_message('success', 'Данные успешно обновлены');
```

или

```php
    Flash::set_flash_message('success', 'Данные успешно обновлены');
```


### display_flash_message

Выводит в нужном вам месте сообщение установленное в сессию ранее

##### Пример использоваиня:
```php
    $message = Flash::display_flash_message();
    echo $message;
```

### display_html_flash_message

Выводит в нужном вам месте сообщение установленное в сессию ранее отформатированное в html разметкой Bootstrap 3
                                                          
##### Пример использоваиня:
```php
    echo Flash::display_html_flash_message();
```
