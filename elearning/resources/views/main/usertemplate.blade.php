<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    @yield('title')
  </head>

  <body>

    <!-- NAVBAR START -->
    @include('components.navbaruser')
    <!-- NAVBAR END -->

    <!-- container start-->
    <div class="container-fluid">
      <div class="row flex">
        
        <!-- SIDEBAR START -->
        @include('components.sidebaruser')
        <!-- SIDEBAR END -->

        <!-- isi konten -->
        <div id="page-content" class="col content bg-secondary bg-opacity-10 px-5 mx-0 pt-5">
        @yield('content')
        </div>
        <!-- konten end-->

      </div>
    </div>
    <!-- container end-->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/e800405822.js" crossorigin="anonymous"></script>

    <!-- jam -->
    <script>
      setInterval(function () {
        const clock = document.querySelector(".display");
        let time = new Date();
        let sec = time.getSeconds();
        let min = time.getMinutes();
        let hr = time.getHours();
        let day = "AM";
        if (hr > 12) {
          day = "PM";
          hr = hr - 12;
        }
        if (hr == 0) {
          hr = 12;
        }
        if (sec < 10) {
          sec = "0" + sec;
        }
        if (min < 10) {
          min = "0" + min;
        }
        if (hr < 10) {
          hr = "0" + hr;
        }
        clock.textContent = hr + ":" + min + ":" + sec + " " + day;
      });
    </script>
  </body>
</html>
