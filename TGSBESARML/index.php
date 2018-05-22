<!DOCTYPE html>
<html>
	<head>
		<title>Animal Classifier</title>
		<link rel="stylesheet" href="css/960.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="img/icon.png" type="image/png">

		<!-- MAIN STYLE -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- JQUERY -->
	  	<script src="vendor/jquery/jquery-3.3.1.min.js"></script>

		<!-- BOOTSTRAP CSS-->
		<link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
		

		<!-- BOOTSTRAP JS -->
		<script src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- AXIOS -->
	  	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

		<!-- BOOTSTRAP TOGGLE -->
		<script type="text/javascript" href="js/toggle.js"></script>

		<!-- FONTAAWESOME 4.7 -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<button type="button" class="btn btn-info" id="floating-button" data-toggle="tooltip" data-placement="bottom" title="About Us"><i class="fa fa-user fa-lg"></i></button>
    		
    
  		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<br><br>
					<h1 class="font-putih">Animal Classifier</h1>
				</div>
				<div class="col-md-12" style="font-size: 20px">
					<h2 class="font-putih">Prediksi Hewan</h2>
					<h5 class="font-putih">Tugas Besar Mechine Learning</h5>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="bungkus-form col-md-10">
				<div class="col-md-6">
					<h5>Apakah Hewan ini hidup di air?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id="air" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini memiliki Tulang Belakang?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "tulang" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini Bernapas?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "napas" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini Bertelur ?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "telur" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini memiliki Bulu?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "bulu" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini memiliki Sirip?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "sirip" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini memiliki Kaki?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "kaki" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini memproduksi Susu?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "susu" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini memiliki Buntut?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "buntut" checked><span class="slider round"></span>
					</label>
				</div>

				<div class="col-md-6">
					<h5>Apakah Hewan ini memiliki Gigi?</h5>
				</div>
			
				<div class="col-md-6">
					<label class="switch">
					  <input type="checkbox" id = "gigi" checked><span class="slider round"></span>
					</label>
				</div>

				<button type="button" id = 'hasil'> Clasifikasi! </button>
			</div>
		</div>
		<br></br>
		<div class="container">
			<div class="bungkus-form col-md-10">
				<h3>Hasil</h3>
				<h5>Hewan</h5>
			</div>
		</div>


		<!-- TOOLTIP -->
<script>
	
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   



    $('#hasil').click(function(){
    		var air = ( $('input[id="air"]:checked').val() == 'on') ? 1 : 0;
    		var tulang = ( $('input[id="tulang"]:checked').val() == 'on') ? 1 : 0;
    		var napas = ( $('input[id="napas"]:checked').val() == 'on') ? 1 : 0;
    		var telur = ( $('input[id="telur"]:checked').val() == 'on') ? 1 : 0;
    		var bulu = ( $('input[id="bulu"]:checked').val() == 'on') ? 1 : 0;
    		var sirip = ( $('input[id="sirip"]:checked').val() == 'on') ? 1 : 0;
    		var kaki = ( $('input[id="kaki"]:checked').val() == 'on') ? 1 : 0;
    		var susu = ( $('input[id="susu"]:checked').val() == 'on') ? 1 : 0;
    		var buntut = ( $('input[id="buntut"]:checked').val() == 'on') ? 1 : 0;
    		var gigi = ( $('input[id="gigi"]:checked').val() == 'on') ? 1 : 0;

    		// alert(JSON.stringify(gigi));
    		var data = {};

    		data.aquatic = air;
    		data.backbone = tulang;
    		data.breathes = napas;
    		data.eggs = telur;
    		data.feathers = bulu;
    		data.fins = sirip;
    		data.legs = kaki;
    		data.milk = susu;
    		data.tail = buntut;
    		data.toothed = gigi;

    		
			// $.ajax({
	  		//           url: 'https://mechine-learning-uajy.herokuapp.com/predict/task',			
			// 	type: 'POST',
			// 	data: JSON.stringify(data),
	  		//           success: function(data) {
   			//                  console.log('success');
   			//                  console.log(JSON.stringify(data));
   			//              },

		   //              error: function(err) {
		   //              	alert(JSON.stringify(err));
		   //              }
		   //          });

   		axios({
		  method: 'post',
		  headers: {'Content-Type': 'application/json'
		  			'Accept' : 'application/json'
				},
		  url: 'https://mechine-learning-uajy.herokuapp.com/predict/task',
		  data: JSON.stringify(data)
		}).then(function(response){
			alert(response);
		});

    });
});
</script>

</body>
</html>