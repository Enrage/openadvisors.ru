<?php
if ($_GET['frv_windows'] == 1) {
  if (file_exists('webroot/userfiles/files/frv_windows.txt')) {
    $fl = file('webroot/userfiles/files/frv_windows.txt');
    $ourchis = $fl[0];
    $ourchis++;
    $ufl = fopen('webroot/userfiles/files/frv_windows.txt', 'w+');
    fwrite($ufl, $ourchis);
    fclose($ufl);
  } else {
    $ufl = fopen('webroot/userfiles/files/frv_windows.txt', 'w+');
    fwrite($ufl, "1");
    fclose($ufl);
  }
  header("Location:/userfiles/files/FRV_Prof_05.rar");
}

if ($_GET['frv_android'] == 1) {
  if (file_exists('/userfiles/files/frv_android.txt')) {
    $fl = file('/userfiles/files/frv_android.txt');
    $ourchis = $fl[0];
    $ourchis++;
    $ufl = fopen('/userfiles/files/frv_android.txt', 'w+');
    fwrite($ufl, $ourchis);
    fclose($ufl);
  } else {
    $ufl = fopen('/userfiles/files/frv_android.txt', 'w+');
    fwrite($ufl, "1");
    fclose($ufl);
  }
  header("Location:/userfiles/files/FRV_Prof_05.apk");
}

if ($_GET['fn_windows'] == 1) {
  if (file_exists('/userfiles/files/fn_window.txt')) {
    $fl = file('/userfiles/files/fn_window.txt');
    $ourchis = $fl[0];
    $ourchis++;
    $ufl = fopen('/userfiles/files/fn_windows.txt', 'w+');
    fwrite($ufl, $ourchis);
    fclose($ufl);
  } else {
    $ufl = fopen('/userfiles/files/fn_windows.txt', 'w+');
    fwrite($ufl, "1");
    fclose($ufl);
  }
  header("Location:/userfiles/files/FN_001.exe");
}

if ($_GET['fn_android'] == 1) {
  if (file_exists('/userfiles/files/fn_android.txt')) {
    $fl = file('/userfiles/files/fn_android.txt');
    $ourchis = $fl[0];
    $ourchis++;
    $ufl = fopen('/userfiles/files/fn_android.txt', 'w+');
    fwrite($ufl, $ourchis);
    fclose($ufl);
  } else {
    $ufl = fopen('/userfiles/files/fn_android.txt', 'w+');
    fwrite($ufl, "1");
    fclose($ufl);
  }
  header("Location:/userfiles/files/FN_001.apk");
}
?>