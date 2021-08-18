<?php

$age = 25;

if ( 14 >= $age && $age >= 0) {
    echo "Çocuk";
}
elseif (24 >= $age && $age >= 15) {
    echo "Genc";
}
elseif (64 >= $age && $age >= 25) {
    echo "Yetiskin";
}
elseif ($age > 64) {
    echo "Yasli";
}
else {
    echo "Tanimlanamayan bir deger girdiniz!";
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
