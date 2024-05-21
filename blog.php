<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>blogBudsss</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('WhatsApp Image 2024-04-01 at 23.00.17_065b3419.jpg');
      background-size: cover;
      background-position: center;
    }

    header {
      background-color: rgba(0, 0, 0, 0.5);
      color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      text-align: center;
    }

    main {
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }

    h1, h2, h3 {
      margin-top: 0;
    }

    article {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    article h3 {
      color: rgba(51, 51, 51, 0.9);
      margin-bottom: 10px;
    }

    article a {
      color: rgba(0, 123, 255, 0.9);
      text-decoration: none;
    }

    article a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>
    <h1>Break Your limit !!!</h1>
  </header>
  <main>
    <section id="blog-posts">
      <h2>Berisikan artikel mengenai hal-hal seputar E-sports</h2>
      <?php
      // Establishing a connection to MySQL
      $servername = "localhost";
      $username = "root"; // Replace with your MySQL username
      $password = ""; // Replace with your MySQL password
      $database = "artikel.articles"; // Replace with your MySQL database name

      // Create connection
      $conn = new mysqli($servername, $username, $password, $database);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Query to retrieve article data from the database
      $sql = "SELECT title, content, link FROM articles";
      $result = $conn->query($sql);

      // Outputting article data dynamically
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo '<article>';
              echo '<h3>' . $row['title'] . '</h3>';
              echo '<p>' . $row['content'] . '</p>';
              echo '<a href="' . $row['link'] . '">Baca Selengkapnya</a>';
              echo '</article>';
          }
      } else {
          echo "0 results";
      }

      // Closing MySQL connection
      $conn->close();
      ?>
    </section>
  </main>
</body>
</html>
