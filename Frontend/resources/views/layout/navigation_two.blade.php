<nav id="nav-upload" class="nav-upload">
    <div class="nav-left">
      <img src="assets/img/logo1.png" class="logo">
      <a href="/">Home</a></li>
    </div>

    {{-- search bar --}}
    <div class="nav-right">
      <div class="search-box">
        <img src="assets/img/search.png">
        <input type="text" placeholder="Search">
      </div>
      {{-- <ul>
        <li><img src="assets/img/bell.png" class="logo"></li>
        <li><img src="assets/img/mail.png" class="logo"></li>
        <li><img src="assets/img/comment.png" class="logo"></li>
      </ul> --}}
      <div class="nav-user-icon online">
        <img src="assets/img/anime.png">
        <div class="dropdown-menu" id="user-menu">
          <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
</nav>

{{-- script --}}
<script>
  var userIcon = document.getElementById('user-icon');
  var userMenu = document.getElementById('user-menu');

  userIcon.addEventListener('click', function() {
    userMenu.classList.toggle('show');
  });
</script>