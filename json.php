<?php
  $url = "https://api.github.com/users/incognitadev";
  $request = curl_init($url);
  curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($request, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
  $user = json_decode(curl_exec($request));
  // print_r($user)
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=".\css\json.css">
  <title><?=$user->name?> profile</title>
</head>
<body>
  <section class="card">
      <div class="about">
           <img src="<?=$user->avatar_url?>" alt="">
           <div class="about-info">
            <h1><?=$user->name?></h1>
            <p><?=$user->location?></p>
            <p><?=$user->company?></p>
          </div>
      </div>
      <div class="repo-data">
        <div class="repo-count"> 
          <h2>Public Repositories</h2>  
          <?=$user->public_repos?>
        </div>
        <div class="user-about"> 
          <h2>Sobre</h2>  
          <?=$user->bio?>
        </div>
      </div>
  </section>
</body>
</html>
