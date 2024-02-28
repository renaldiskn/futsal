<style>
  .bg-img {
    background-image: url(Gambar/puncak4.jpeg);
    height: 90%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<br><br><br><br>
<div class="md-5">
  <div class="col-md-9">
    <div class="widget">
      <div class="widget-content">
        <legend align="center"><b>Ketentuan Pemakaian Lapangan <?php echo "$namaprofil";?></b></legend>
        <div class="post">
          <div class="entry">
            <div id='isi'>
              <?php
                $idk = '2';
                $ketentuan = mysql_query("select id_about,isi from about where id_about='$idk'");
                $rr = mysql_fetch_array($ketentuan);
                echo "$rr[isi]";
              ?>
            </div>
          </div>
        </div>
      </div> <!-- /widget-content -->
    </div> <!-- /widget -->
  </div> <!-- /span6 -->

  <!-- menu kanan -->
  <!-- <?php include 'modul/menu_kanan.php'; ?> -->
</div>
