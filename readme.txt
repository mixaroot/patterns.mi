Запуск всех тестов:
codecept run -c d:\portfolio\soft\OpenServer\domains\patterns.mi\tests
Генерация теста:
codecept generate:cept acceptance Welcome -c d:\portfolio\soft\OpenServer\domains\patterns.mi\tests
codecept generate:phpunit unit Singleton -c d:\portfolio\soft\OpenServer\domains\patterns.mi\tests
Создания пустой конфигурации тестов:
codecept bootstrap d:\portfolio\soft\OpenServer\domains\patterns.mi\tests