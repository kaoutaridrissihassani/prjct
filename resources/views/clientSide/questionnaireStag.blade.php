<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet" />
    </head>

<body class="p-5 m-5" style="width: 90%; background-color: #80808017;">

	<!-- Head : get information by ID "annance"-->
	{{-- formulaire CV -START --}}
       
	   <center style="background-color: white; width: 100%;" class="m-5">
		   <div class="d-flex flex-column flex-md-row border rounded mr-10 p-4">
			   <img src="https://ats.talenteo.com/attachments/company_logo/logo_2416045_large.jpg" alt="'company-logo'" width="160" height="100" class="mr-auto mr-md-30 ml-md-0 mb-30 mb-md-0" />
			   <div class="d-flex flex-column text-center text-md-left">
				   <h3>Demande de Stage (Espace Stage)</h3>
				   <div>
					   <span data-qa="company-name" class="mr-10">
						   <i class="icon md-balance mr-5"></i>
						   <strong> Menara Holding </strong>
					   </span>
					   <span data-qa="job-locations">
						   <i class="icon md-pin mr-5"></i>
						   <label></label>
					   </span>
				   </div>
			   </div>
		   </div>
	   </center>
	   <!-- end Head  -->
	   @if(Session::has('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
	   <form id="validate" class="ml-25 border rounded m-5 p-5" style="width: 100%; background-color: white;" method="POST" enctype="multipart/form-data" action="{{ route('form.store') }}">
            @csrf
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">


	<fieldset id="id-cv-Form" class="ml-25 border rounded m-5 p-5" style="width: 100%; background-color: white;">
                    {{-- Questionaie - START --}}
                    <div class="form-group border mt-5 p-5" style="background-color:white">

			<!-- Region Sage -->
			<label > Region</label>
			<div class="form-group region">
				<div class="form-check ">
					<input class="form-check-input" type="radio" name="region" id="ID-radio-Region" value="Marrakech">
					<label class="form-check-label" for="inlineRadio1">Marrakech</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="region" id="ID-radio-Region" value="Beni_Mellal">
					<label class="form-check-label" for="inlineRadio2">Beni Mellal</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="region" id="ID-radio-Region" value="Sraghna">
					<label class="form-check-label" for="inlineRadio3">EL Kella des Sraghna</label>
				</div>
			</div>

			<!-- Date Stage -->
			<label> Date debut de Stage</label>
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="dateDebut" id="ID-radio-Date" value="janvier">
					<label class="form-check-label" for="inlineRadio1">Janvier 2022</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="radio" name="dateDebut" id="ID-radio-Date" value="Fevrier">
					<label class="form-check-label" for="inlineRadio2">Fevrier 2022</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="dateDebut" id="ID-radio-Date" value="Mars">
					<label class="form-check-label" for="inlineRadio3">Mars 2022</label>
				</div>
			</div>

			<!-- Dure Satge -->
			<label> Duree de Stage</label>
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="dateFin" id="ID-radio-duree" value="1m">
					<label class="form-check-label" for="inlineRadio1">1 mois</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="radio" name="dateFin" id="ID-radio-duree" value="2m">
					<label class="form-check-label" for="inlineRadio2">2 mois</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="dateFin" id="ID-radio-duree" value="3m">
					<label class="form-check-label" for="inlineRadio3">3 mois</label>
				</div>
			</div>
		</div>
                    {{-- Questionaie - END --}}
					<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
					<input type="submit" name="submit" class="submit btn btn-success" value="Submit" id="submit_data" />
    </fieldset>
</form>


		<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
        <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
        <script src="https://unpkg.com/dropzone"></script>
        <script src="https://unpkg.com/cropperjs"></script>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>


</body>

</html>