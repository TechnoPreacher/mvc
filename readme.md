mvc-2
переписал методами

- отслеживаю $_SERVER
- если http://localhost - даю стартовую страницу ROOT PAGE
- http://localhost/... - даю 404

- если localhost/admin - даю админский индекс: just admin index method
- если localhost/admin/test - даю метод TEST из admin: admin TEST method

такой же home:

- если localhost/home- даю домашний индекс: just home index method
- если localhost/home/test - даю метод TEST из home: home TEST method

