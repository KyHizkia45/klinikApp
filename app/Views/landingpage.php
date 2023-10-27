<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <!-- header -->
    <!-- db Struktur -->
    <?php 
    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM poli, dokter WHERE poli.id_poli = dokter.id_poli ORDER by id_dokter DESC LIMIT 3");
    $fasilitas = $db->query("SELECT * FROM fasilitas")->getResult();
    $review = $db->query("SELECT * FROM user,review WHERE user.id_user = review.id_user")->getResult();
    $berita = $db->query("SELECT * FROM berita");
  
    $data = $query->getResult();
    $dberita = $berita->getResult();
    ?>
    <!-- endDb -->
    <!-- endHeader -->
    
</body>
</html>