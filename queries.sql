INSERT INTO `post` (`Id`, `Title`, `Text`, `PublicationDataTime`)
VALUES (1, 'Сегодня я расскажу вам про тег <form></form>',
        'Тег <form> устанавливает форму на веб-странице. Форма предназначена для обмена данными между пользователем и сервером. Область применения форм не ограничена отправкой данных на сервер, с помощью клиентских скриптов можно получить доступ к любому элементу формы, изменять его и применять по своему усмотрению.\r\n\r\nДокумент может содержать любое количество форм, но одновременно на сервер может быть отправлена только одна форма. По этой причине данные форм должны быть независимы друг от друга.\r\n\r\nДля отправки формы на сервер используется кнопка Submit, того же можно добиться, если нажать клавишу Enter в пределах формы. Если кнопка Submit отсутствует в форме, клавиша Enter имитирует ее использование.\r\n\r\nКогда форма отправляется на сервер, управление данными передается программе, заданной атрибутом action тега <form>. Предварительно браузер подготавливает информацию в виде пары «имя=значение», где имя определяется атрибутом name тега <input>, а значение введено пользователем или установлено в поле формы по умолчанию. Если для отправки данных используется метод GET, то адресная строка может принимать следующий вид.\r\n\r\nhttp://www.htmlbook.ru/cgi-bin/handler.cgi?nick=%C2%E0%ED%FF+%D8%E0%EF%EE%F7%EA%E8%ED&page=5\r\n\r\nПараметры перечисляются после вопросительного знака, указанного после адреса CGI-программы и разделяются между собой символом амперсанда (&). Нелатинские символы преобразуются в шестнадцатеричное представление (в форме %HH, где HH — шестнадцатеричный код для значения ASCII-символа), пробел заменяется на плюс (+).\r\n\r\nДопускается внутрь контейнера <form> помещать другие теги, при этом сама форма никак не отображается на веб-странице, видны только ее элементы и результаты вложенных тегов.',
        '2022-09-10 19:11:49'),
       (2, 'Не знаю что написать...', NULL, '2022-09-10 19:11:28'),
       (3, 'Что такое Git и зачем он нужен?',
        'Git - это консольная утилита, для отслеживания и ведения истории изменения файлов, в вашем проекте. Чаще всего его используют для кода, но можно и для других файлов. Например, для картинок - полезно для дизайнеров.',
        '2022-09-10 19:12:50'),
       (4, 'Сегодня день буква \"A\"!',
        'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
        '2022-09-10 17:16:50'),
       (5, 'Пример MYSQL кода.',
        'INSERT INTO `post` (`Id`, `Title`, `Text`, `PublicationDataTime`, `IsEdited`) VALUES (NULL, \'Сегодня день буква \\\"A\\\"!\', \'AAA\', \'2022-09-10 17:16:50.000000\', \'0\');',
        '2022-09-10 19:18:06'),
       (6, 'Переменные в php',
        'Переменные хранят отдельные значения, которые можно использовать в выражениях PHP. Для определения переменных применяется знак доллара $. Например:\r\n\r\n$num;\r\n\r\nЗдесь определена переменная $num. Поскольку определение переменной - это отдельная инструкция, она завершается точкой с запятой.\r\nКак правило, названия переменный начинаются с маленькой буквы или символа подчеркивания. Стоит учитывать, что PHP является регистрозависимым языком, а значит, переменные $num и $Num будут представлять две разные переменные.\r\nТакже при наименовании переменных нам надо учитывать следующие правила:\r\nИмена переменных должны начинаться с алфавитного символа или с подчеркивания\r\nИмена переменных могут содержать только символы: a–z, A–Z, 0–9, и знак подчеркивания\r\nИмена переменных не должны включать в себя пробелы\r\nС помощью операции присвоения (=) переменной присваивается определенное значение:\r\n\r\n$num = 10;\r\n\r\nЗдесь определена переменная $num, которая хранит число 10.',
        '2022-09-10 19:19:28'),
       (7, 'Тимофей', 'Программист на HTML. Ненавидит Assembler.', '2022-09-10 19:24:46'),
       (8, 'Максим', 'Программист на PHP. Ненавидит Dota 2.', '2022-09-10 21:36:46');