<?php
class Koneksi{
  private $server="localhost";
  private $username="id4962314_atik";
  private $password = "hartika3110";
  private $db = "id4962314_srisugihartika";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
