# html_telegram_bot

- [Source](https://www.youtube.com/watch?v=zuEU-uAi9kE&t=86s&ab_channel=BeTheDeveloper)

- Search BotFather in telegram chat

![](/preview/preview1.png)
![](/preview/preview2.png)
![](/preview/preview3.png)
![](/preview/preview4.png)
![](/preview/preview5.png)

Red Mark is My Token

```
https://api.telegram.org/bot601_________92:AAF________________Bg/getupdates
```

![](/preview/preview5.1.png)

sent hai message

![](/preview/preview5.2.png)

```
https://api.telegram.org/bot601_________92:AAF________________Bg/getupdates
```

![](/preview/preview6.png)

```
https://api.telegram.org/bot601_________92:AAF________________Bg/sendMessage?chat_id=796251625&text=haizein
```

![](/preview/preview7.png)

![](/preview/preview8.png)

```php
<?php

$token = "bot601_________92:AAF________________Bg";
$data = [
    "text" => 'pesannya disini',
    'chat_id' => '796251625',
];

$a = file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
```

---

```
Copyright 2023 M. Fadli Zein
```
