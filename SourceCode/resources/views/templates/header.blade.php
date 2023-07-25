<style>
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px;
  }

  .nav-branding {
    display: flex;
    align-items: center;
    margin-right: auto;
  }

  .nav-menu {
    display: flex;
    list-style: none;
    margin-left: auto;
  }

  .nav-item {
    margin-left: 20px;
  }

  .nav-link {
    text-decoration: none;
    color: #31308B;
    position: relative;
    padding-bottom: 4px;
    transition: all 0.3s;
  }

  .nav-link:hover {
    border-bottom: 2px solid #31308B;
  }

  .hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    padding: 10px;
  }

  .bar {
    width: 25px;
    height: 2px;
    background-color: #000;
    margin: 3px 0;
    transition: all 0.3s;
  }

  .social-icons {
    display: flex;
    align-items: center;
  }

  .social-icon {
    margin-right: 10px;
  }

  .social-icon img {
    height: 30px;
    width: auto;
  }

  @media (max-width: 768px) {
    .nav-menu {
      display: none;
    }

    .hamburger {
      display: flex;
    }

    .social-icons {
      display: none;
    }

    .navbar {
      justify-content: space-between;
    }

    .navbar-mobile {
      display: flex;
      align-items: center;
    }

    .nav-branding {
      margin-right: auto;
      align-items: center;
    }

    /* Add a new CSS class to show the nav-menu when active */
    .nav-menu.active {
      display: flex;
      flex-direction: column;
    }

    /* Adjust the styles as needed for the mobile navigation */
    .nav-item {
      margin-left: 0;
      margin-bottom: 10px;
    }
  }
  
</style>

<nav class="navbar" style="margin-right: 40px; margin-left: 40px;">
  <a href="#" class="nav-branding">
    <img src="./assets/img/logoharpas.png" alt="Logo" style="height: 52px; width: auto; margin: auto;">
  </a>
  <ul class="nav-menu">
    <li class="nav-item">
      <a href="{{ url('/') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/AboutUs') }}" class="nav-link">About Us</a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/Event') }}" class="nav-link">Event</a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/Services') }}" class="nav-link">Services</a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/Articles') }}" class="nav-link">Articles</a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/ContactUs') }}" class="nav-link">Contact Us</a>
    </li>
  </ul>
  <div class="navbar-mobile">
    <div class="hamburger">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
  </div>
</nav>

<script>
  // JavaScript to handle the click event on the hamburger button
  const hamburger = document.querySelector('.hamburger');
  const navMenu = document.querySelector('.nav-menu');

  hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
  });
</script>