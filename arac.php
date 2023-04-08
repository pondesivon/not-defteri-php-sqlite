 <?php
  class Arac {
    public static function YeniSatirKarakterleriniPEtiketiIleSar($metin) {
      $metin = trim($metin);
      return '<p>' . preg_replace('/[\r\n]+/', '</p><p>', $metin) . '</p>';
      //https://eloux.com/2014/04/15/a-better-alternative-to-php-nl2br/
    }
  }