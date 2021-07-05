function gagal(e)
 {
 switch (e.target.error.code)
{
 case e.target.error.MEDIA_ERR_SRC_NOT_SUPPORTED:
 alert('Format tidak didukung ' +
 'atau file tidak ada.');
 break;
 case e.terget.error.MEDIA_ERR_ABORTED:
 alert('Pemutaran dibatalkan');
break;
 case e.target.error.MEDIA_ERR_DECODE:
 alert('Problem kerusakan file.');
break;
 case e.target.error.MEDIA_ERR_NETWORK:
 alert('Problem jaringan.');
break;
 default:
 alert('Kesalahan lain-lain.');
break;
 }
 }