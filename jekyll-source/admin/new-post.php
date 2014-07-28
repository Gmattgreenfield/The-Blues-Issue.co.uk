<html lang="en">

  <head>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="admin-style/admin-style.css">
    <script>
      <?php
       require_once 'connect.php';
       ?>
    </script>
  </head>

  <body>
    <div class="page-container">

        <a href="index.php">Back to List</a>

        <form action="">

          <ul>
            <li>
              <label for="gig-date">Date (YYYY/MM/DD)</label>
              <input type="text" id="gig-date">
            </li>

            <li>
              <label for="gig-venue">Venue</label>
              <input type="text" id="gig-venue">
            </li>

            <li>
              <label for="gig-town">Town</label>
              <input type="text" id="gig-town">
            </li>

            <li>
              <input type="submit" id="">
            </li>
          </ul>


        </form>


    </div>
  </body>

</html>
