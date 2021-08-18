<?php

$age = 25;

/* Yaş kontrolümüzü yapmak için ilk if'i çocuk aralığından başlatıyoruz.
Amacımız $age değişkeninin 0 ile 14 sayıları arasında olup olmadığını kontrol etmek.*/
if ( 14 >= $age && $age >= 0) {
    echo "Çocuk";
}
//Sonraki araliga geciyoruz else kismina kadar ayni surec isliyor.
elseif (24 >= $age && $age >= 15) {
    echo "Genç";
}
elseif (64 >= $age && $age >= 25) {
    echo "Yetişkin";
}
elseif ($age > 64) {
    echo "Yaşlı";
}
//Ileride $age degiskeni eger input olarak alinirsa, negatif sayilar girilmesi durumunda hata mesaji yazdirabilmemiz icin
else {
    echo "Tanımlanamayan bir değer girdiniz!";
}
/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
