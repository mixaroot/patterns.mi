Пример запуск всех тестов:
codecept run -c d:\portfolio\soft\OpenServer\domains\patterns.mi\tests
codecept run unit SingletonTest -c d:\portfolio\soft\OpenServer\domains\patterns.mi\tests
Пример генерация теста:
codecept generate:phpunit unit Singleton -c d:\portfolio\soft\OpenServer\domains\patterns.mi\tests
Создания пустой конфигурации тестов:
codecept bootstrap d:\portfolio\soft\OpenServer\domains\patterns.mi\tests