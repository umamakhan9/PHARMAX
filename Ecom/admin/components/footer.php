<?php require('../connect.php'); 
   $query = "SELECT * FROM register Where id = '$id' ";
   $res =  mysqli_query($con,$query);
   $data = mysqli_fetch_assoc($res);
?>
<footer class="footer">
  <div class="container-fluid">
    <ul class="nav">
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link footer-link">
          <?php echo $data['name'] ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link footer-link">
          Health Tips
        </a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link footer-link">
          FAQs
        </a>
      </li>
    </ul>
    <div class="copyright">
      ©
      <script>
        document.write(new Date().getFullYear())
      </script> made with <i class="tim-icons icon-heart-2"></i> by
      <a href="javascript:void(0)" target="_blank" class="footer-link">PHARMAX</a> 
    </div>
  </div>
</footer>

<style>
 

  .footer-link {
    color: black !important; /* Change text color to black */
    text-decoration: none;
  }

  .footer-link:hover {
    color: #333; /* Slightly darker on hover for better UX */
  }

  .copyright {
    color: black;
  }
</style>
