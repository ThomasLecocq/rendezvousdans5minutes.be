<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>5-Min Rendez-Vous / Afspraak</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" type="text/css" media="all">
  <link rel="icon" href="data:;base64,=">
</head>
<body>
  <div class="container-fluid flyer-builder">

    <div class="row">
      <div class="col-sm-8">

        <h1>Rendez-vous dans 5 minutes - Afspraak in 5 minuten</h1>

        <p><em>by <a href="https://asktom.be" target='_blank'>AskTom.be</a></em></p>
		<p>Comment cela fonctionne ? - Hoe werkt het?<br>
		Remplissez les information ci-dessous et générez le PDF pour l'afficher sur votre vitrine.<br>
		Vul de onderstaande gegevens in en genereer de PDF om op uw etalage te plaatsen.
		</p>
		
        <div class="row">
          <div class="col-sm-7">
            <div class="form-group">
              <label for="flyer-title">Title</label>
              <input required class="form-control" id="flyer-title" placeholder="Main title" value="WE ARE OPEN" maxlength="255" type="text">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="flyer-title-size">Size (pt)</label>
              <input required class="form-control" id="flyer-title-size" value="60" min="1" step="1" type="number" title="Title size: tune it to fit the available space">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label for="flyer-title-color">Color</label>
              <input required class="form-control" id="flyer-title-color" value="#0080FF" type="color" title="Title color">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="flyer-description">Description</label>
          <textarea class="form-control" id="flyer-description"  placeholder="Insert a short description taking care of the available space">Prenez rendez-vous via l'une de ces plateformes - Maak een afspraak via een van deze platforms</textarea>
        </div>

		<div class="row">
          <div class="col-sm-2">
            <div class="form-group">
              <label for="flyer-insta">Instagram</label>
              <input class="form-control" id="flyer-insta" placeholder="Ig without the @"><br>
			  <div id="qrcode-insta"></div>
            </div>
          </div>
		 <div class="col-sm-2">
            <div class="form-group">
              <label for="flyer-face">Facebook</label>
              <input class="form-control" id="flyer-face" placeholder="FB without the @"><br>
			  <div id="qrcode-face"></div>
			  </div>
          </div>
		<div class="col-sm-2">
            <div class="form-group">
              <label for="flyer-email">Email</label>
              <input class="form-control" id="flyer-email" ><br>
			  <div id="qrcode-email"></div>
            </div>
          </div>
		<div class="col-sm-2">
            <div class="form-group">
              <label for="flyer-phone">Telephone</label>
              <input class="form-control" id="flyer-phone" ><br>
			  <div id="qrcode-phone"></div>
</div>
          </div>
		  <div class="col-sm-3">
            <div class="form-group">
              <label for="flyer-web">Web</label>
              <input class="form-control" id="flyer-web" ><br>
			  <div id="qrcode-web"></div>
            </div>
          </div>
		</div>

        <hr>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <button id="flyer_preview_btn" type="button" class="btn btn-primary btn-block" tabindex="9">Update preview</button>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group text-right">
              <button id="flyer_download_btn" type="button" class="btn btn-secondary btn-xs btn-block" tabindex="10">Download</button>
             </div>
          </div>
        </div>

      </div>

      <div class="col-sm-4">
        <embed id="pdf_preview" type="application/pdf" src=""></embed>
      </div>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
  <script type="text/javascript" src="app.js"></script>


<i><p>Based on the PDF Leaflet builder from <a href="https://github.com/massimo-cassandro/area-test/tree/main/esercizi/2016-02-pdf-flyer">github.com/massimo-cassandro/area-test/tree/main/esercizi/2016-02-pdf-flyer</a></p></i>
<p><em><? include "counter.php" ?><? getCounter("1"); ?></em><p>
</body>
</html>