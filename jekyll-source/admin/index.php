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

      <h1>Gigs</h1>

      <table class="gigs-table">
          <tr>
              <th>Date</th>
              <th>Venue</th>
              <th>Town</th>
          </tr>
          <?php
            $rowid = $row[id];
            $delete = 'DELETE FROM `gigs` WHERE `id` = $rowid';

            while($row = $rs->fetch_assoc()){
              echo '<tr>';
                echo '<td>' . $row['date'] . '</td>';
                echo '<td>' . $row['venue'] . '</td>';
                echo '<td>' . $row['town'] . '</td>';
                echo '<td>
                        <form action="' . $delete . '" method="post">
                          <input type="hidden" id="id" name="id" value="' . $row[id] . '" />
                          <input type="submit" name="formDelete" id="formDelete" value="Delete" />
                        </form>
                      </td>';
              echo '</tr>';
            };
           ?>
      </table>

      <a href="new-post.php">Add New</a>

    </div>
  </body>

</html>
