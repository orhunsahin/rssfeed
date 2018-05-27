## rssfeed Modülü Nedir ?

rssfeed modülü yii ile yazılmış kouosl projesine entegre bir modüldür.

## rssfeed Modülü Neler Yapar ?

Aşağıdaki adreste;



- http://portal.kouosl/rssfeed/rssfeed/index



RSS Feed kayıtlarını listeler.

![rssfeed Screenshot](https://image.ibb.co/exd06T/ndex.png)

------------

Aşağıdaki adreste;


- http://portal.kouosl/rssfeed/rssfeed/create



RSS Feed kaydı ekler.

![rssfeed Screenshot](https://image.ibb.co/nJFDRT/nsert.png)

------------

Aşağıdaki adreste;



- http://portal.kouosl/rssfeed/rssfeed/view?id=1



RSS Feed id'si yazılan kayıtların detaylarını görüntüler.

![rssfeed Screenshot](https://image.ibb.co/m6Q2Lo/Detail.png)

------------

Aşağıdaki adreste;



- http://portal.kouosl/rssfeed/rssfeed/update?id=1



Rss Feed id'si yazılan kayıtların güncelleme ve silme işlemlerini yapar.

![rssfeed Screenshot](https://image.ibb.co/dEMyt8/update.png)


rssfeed modülünün çalışma videosuna aşağıdaki adresten erişebilirsiniz.


https://youtu.be/kCEbnKUuXJE


## rssfeed Modülü Nasıl Kurulur ?

Komut satırında cd komutu ile portal/vendor/kouosl dizinine girilir.

Daha Sonra aşağıdaki kod çalıştırılır.

```bash
git clone https://github.com/orhunsahin/rssfeed.git rssfeed
```

Bu kodla birlikte rssfeed klasörünün için RSS Feed modülü için gerekli dosyalar github'dan çekilecektir.

Daha sonra portal dizinin içinde aşağıda verilen dizinlerdeki dosyalarda modules arrayine en alt satırdaki kod eklenecektir.

```bash

\portal\backend\config\main.php
\portal\frontend\config\main.php
'Feed' => ['class' => 'kouosl\rssfeed\Module',],

```

Ardından portal dizinindeki "composer.json" dosyasına girerek Feed modülünü eklemek gerekiyor.

```bash

....
"repositories": [
    {
        ....
        {
            "type": "vcs",
            "url": "https://github.com/orhunsahin/rssfeed.git"
        }
],
"require": {
     
    ....   
    "kouosl/rssfeed": "dev-master"
},
....

```

Son olarak Putty ile sanal makineye erişilerek komut satırına
```bash

cd /var/www/portal
sudo chmod -R 777 vendor/kouosl/rssfeed
composer update

```

Sırasıyla yukarıdaki komutlar verilir ve RSS Feed modülü projeye eklenmiş olur.

Daha sonra veritabanı işlemleri yapılır.

Komut satırından cd komutuyla portal dizinine girildikten sonra aşağıdaki komut çalıştırılır.

```bash

php yii migrate --migrationPath=@vendor/kouosl/rssfeed/migrations --interactive=0

```

Bu kod çalıştırıldığında rssfeed isimli veritabanı tablosu ve içerisindeki kayıtlar kouosl database'ine eklenecektir.

Son olarak Modüle aşağıdaki adresten erişebilirsiniz.



- http://portal.kouosl/rssfeed/rssfeed


## Proje Dahilinde Yapılanlar Neler ?
------------

- Modül oluşturma.
- Model oluşturma.
- Migration oluşturma.
- Veritabanı tablosu oluşturma ve kayıtları ekleme.
- Controller oluşturma.
- CRUD üretme.
- View dosyalarını oluşturma.

## Yararlanılan Kaynaklar Neler ?

https://medium.com/kouosl

https://www.youtube.com/watch?v=6B52-li6IgU&