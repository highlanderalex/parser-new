Структура папок и файлов:
	
	classes
		CsvModel.php - класс для работы с csv
		ParserModel.php - класс для парсинга страницы
		ProductModel.php - класс для работы с таблицей БД
		DB.php - класс для работы с БД
		tests - содержит юнит тесты 
	
	config->config.php - конфигурационные настройки
	
	data - файлы с данными
	
	lib
		helpers->func.php - функции-хелперы
	
	resource->page.php - страница результатов
	
	storage->errors->log.txt - лог ошибок
	
	index.php - запускает скрипт
	
	script.php - содержит основную логику

	для услановки нужно запустить composer install
	затем настроить базу изменить настройки в файле config/config.php а также залить дамп carid.sql