<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
  <!-- Logo -->
  <a class="navbar-brand" href="#">BokinCar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- menu -->
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" id="home" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="booking" href="/booking">Booking&Return</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="statistic" href="/statistic">Statistic</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="vehicle" href="/vehicle">Vehicle</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="client" href="/client">Client</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right" style="position: absolute; right: 5px;">
      <li class="nav-item">
        <a class="nav-link btn btn-danger" href="/sys/resetdb">
          <span class="fa fa-bomb"></span> ResetDB
        </a>
      </li>
    </ul>
  </div>
</nav>
<script>
  var currentMenu =  document.URL.split('/')[3];
  $("#" + currentMenu).addClass("active");
</script>