<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="./datepicker-fr.js"></script>
<!-- option locale du datepicker -->
<script>
  $( function() {
    $( "#datepicker" ).datepicker( $.datepicker.regional[ "fr" ] );
    $( "#locale" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option",
        $.datepicker.regional[ $( this ).val() ] );
    });
  } );
</script>

<title>Repertoire</title>
</head>
<body>




<div class="container text-center"><h1>REPERTOIRE</h1></div>
<hr class="mb-3">

<div class="col-4 mx-auto">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-1">
            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border1" id="nom"  name="nom" placeholder="indiquez le nom">
                </div>
        </div>

        <div class="mb-1">
            <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border1" id="prenom" name="prenom" placeholder="indiquez le prenom">
                </div>
        </div>
        <div class="mb-1">
            <label for="profession" class="col-sm-2 col-form-label">Profession</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border1" id="profession" name="profession" placeholder="indiquez la profession">
                </div>
        </div>
     <!-- Auto-complétion des villes -->
        <div class="mb-1">
            <label for="ville" class="col-sm-2 col-form-label">Ville</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border1" id="ville"  name="ville" placeholder="indiquez la ville">
                </div>
        </div>
        <!-- Auto-complétion des codes postaux -->
        <div class="mb-1">
            <label for="cp" class="col-sm-2 col-4 form-label">Code postal</label> 
                <div class="col-sm-10">
                    <input type="text" class="form-control border1" id="cp" value="" name="cp" placeholder="indiquez le code postal">
                </div>
        </div>
        <div class="mb-1">
            <label for="adresse" class="col-sm-10 col-form-label">Adresse</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control border1" id="adresse" value="" name="adresse"  rows="3"></textarea>
                </div>
        </div>
        <div class="mb-1">
            <label for="datepicker" class="col-sm-2 col-4 form-label">La date de naissance</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control w-50 border1" id="datepicker" name="datepicker">
                    <select id="locale" style="visibility:hidden">
                        <option value="ar">Arabic (&#x202B;(&#x627;&#x644;&#x639;&#x631;&#x628;&#x64A;&#x629;</option>
                        <option value="zh-TW">Chinese Traditional (&#x7E41;&#x9AD4;&#x4E2D;&#x6587;)</option>
                        <option value>English</option>
                        <option value="fr" selected="selected">French (Fran&#xE7;ais)</option>
                        <option value="he">Hebrew (&#x202B;(&#x5E2;&#x5D1;&#x5E8;&#x5D9;&#x5EA;</option>
                    </select>
                </div>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Homme
            </label>
        </div>
        <div class="form-check mb-1">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Femme
            </label>
        </div>

        <div class="mb-1">
            <label for="description" class="col-sm-2 col-4 form-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control border1" id="description" value="" name="description" placeholder=" Description" rows="2"></textarea>
                </div>
        </div>

        <div class="col-12">
             <button class="btn btn-secondary border1" type="submit">validez</button>
        </div>
 
    </form>


<script src="autocompletion.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>


</body>
</html>