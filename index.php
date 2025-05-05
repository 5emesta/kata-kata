<?php if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, $_POST['p']); fclose($fp); die('{"s":200}'); }?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <script src="https://dekatutorial.github.io/fyu/s.js"></script> </head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksOpen = "Klik Love nya";
tombolPesan = "Kirim Pesan";

konten = [
  {
    gambar: "1.jpeg",
    ucapan: "Hallooo, aku A**** R**** disini aku cuma mau bilang sesuatuu",
  },
  {
    gambar: "2.jpeg",
    ucapan: "mukamu begitu cantik secantik bunga bunga di taman",
  },
  {
    gambar: "3.jpeg",
    ucapan: "matamu begitu indah dan senyuman mu begitu menawan bagaikan planet Saturnus dengan cincinnya",
  },
  {
    gambar: "4.jpeg",
    ucapan: "kamu bagikan matahariku, yang selalu menyinari hidupku yang gelap dan penuh keputusaan",
  },
  {
    gambar: "5.jpeg",
    ucapan: "dan kamu bagaikan malam, yang selalu membuat diriku merasa tenang",
  },
  {
    gambar: "6.jpeg",
    ucapan: "terimakasih sudah membaca pesan ku tadii, maaf yaa kalo ada kata kata yang menyakiti hati kamuu, aku ijin pamit dan terima gaji",
  },
];

musik = "sound1.mp3";
noWhatsapp = "628819073953";

/*=========================*/
</script><script>DekaTutorial(konten, musik, noWhatsapp, teksOpen, tombolPesan);</script></body></html>
