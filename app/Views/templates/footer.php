  <!-- menu mobile -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="dropdown-item active" onclick="">Action</a>
    <a class="dropdown-item active" onclick="">Action</a>
    <a class="dropdown-item active" onclick="">Action</a>
    <a class="dropdown-item active" onclick="">Action</a>
    <a class="dropdown-item active" onclick="">Action</a>
  </div>

  <div class="menu-mobile">
    <ul>
      <li>
        <a href=" <?php echo base_url() ?> ">
          <i class="fas fa-home"></i>HOME
        </a>
      </li>
      <li>
        <a href="#" onclick="openNav()">
          <i class="fas fa-film"></i>CATEGORY
        </a>
      </li>
      <li>
        <a href="#" data-toggle="modal" data-target="#anime-contract">
          <i class="fas fa-comments"></i>CONTRACT
        </a>
      </li>
    </ul>
  </div>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>
    /* Set the width of the side navigation to 250px */
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>

</body>

</html>