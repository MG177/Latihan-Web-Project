<?php include_once 'sidebar.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="sebuah CV yang awalnya berkembang dari tugas sekolah" />
    <meta
      name="keywords"
      content="Prayer MG Terok, CV, Alphachannel, Unklab"
    />
    <meta name="author" content="Prayer MG Terok" />
    <title>CV</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
      <section>
      <div class="box">
      <hr/>
      <table id="content" >
<?php echo "
        <tr>
          <td class=\"center\">
            <img src=\"img/Ganteng.jpg\" alt=\"profile-picture\" width=\"200\" id=\"pp\"/>
          </td>
          <td>
            <h1>".$_SESSION["fname"]." ".$_SESSION["lname"]."</h1>
            <h2>Collage Student</h2>
            <p>
              Watutumou, Kalawat, North Minahasa Regency, North Sulawesi, Indonesia, 95378
              <br />
              <strong>Email:</strong> <em>".$_SESSION["email"]."</em>
              <br />
              <strong>Phone:</strong> +62 856 9676 9836
            </p>
          </td>
        </tr>
        ";?>
      </table>
      </div>
      </section>
  </body>
</html>
