# html_telegram_bot

- [Source](https://www.youtube.com/watch?v=zuEU-uAi9kE&t=86s&ab_channel=BeTheDeveloper)

- Search BotFather in telegram chat

![](/preview/preview1.png)

- Run Command `/start`

![](/preview/preview2.png)

- Run Command `/newbot`, fill Bot username and Bot Name, to get token

![](/preview/preview3.png)

- open chat `t.me/GZeinNumerBot`

![](/preview/preview4.png)

![](/preview/preview5.png)

- Red Mark is My Token

```
https://api.telegram.org/bot601_________92:AAF________________Bg/getupdates
```

Result

![](/preview/preview5.1.png)

sent `hai` message

![](/preview/preview5.2.png)

```
https://api.telegram.org/bot601_________92:AAF________________Bg/getupdates
```

- Now you can get `chat_id`

![](/preview/preview6.png)

- Now sent chat via url

```
https://api.telegram.org/bot601_________92:AAF________________Bg/sendMessage?chat_id=796251625&text=haizein
```

![](/preview/preview7.png)

![](/preview/preview8.png)

- run this file in URL `localhost\html_telegram_bot\index.php`

```php
//index.php
<?php

$token = "bot601_________92:AAF________________Bg";
$data = [
    "text" => 'pesannya disini',
    'chat_id' => '796251625',
];

$a = file_get_contents("https://api.telegram.org/$token/sendMessage?" . http_build_query($data));
```

![](/preview/prewiew9.png)

---

```
Copyright 2023 M. Fadli Zein
```
