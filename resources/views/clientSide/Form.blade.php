
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

        <!-- library js validate -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/11.3/jquery.min.js"></script>
        <script src="/assets/js/validate.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    </head>
    <body class="p-5 m-5" style="width: 90%; background-color: #80808017;">

        <style>
            .error{
                color: red;
                border-color: red;
            }
        </style>
        <!-- Head : get information by ID "annance"-->
        {{-- formulaire CV -START --}}
       
        <center style="background-color: white; width: 100%;" class="m-5">
            <div class="d-flex flex-column flex-md-row border rounded mr-10 p-4">
                <img src="https://ats.talenteo.com/attachments/company_logo/logo_2416045_large.jpg" alt="'company-logo'" width="160" height="100" class="mr-auto mr-md-30 ml-md-0 mb-30 mb-md-0" />
                <div class="panel panel-bordered">
                <div class="panel-body">
                <div class="text-center">
                    <div class="media-body mt-10">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="d-flex flex-column flex-md-row">
                   
                <div class="d-flex flex-column text-center text-md-left">
                        <h3>
                Demande de Stage (Espace Stage)            </h3>
            <div>
                                <span data-qa="company-name" class="mr-10">
                    <i class="icon md-balance mr-5"></i>
                    <strong>
                        Menara Holding                    </strong>
                </span>
                                <span data-qa="job-locations">
                    <i class="icon md-pin mr-5"></i>
                    <strong>
                        Beni Mellal, Khénifra, Maroc | El Kelaâ des Sraghna, Marrakech et région, Maroc | Marrakech et région, Maroc                    </strong>
                </span>
            </div>
        </div>
    </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </center>
        <!-- end Head  -->
       <!--<span id="message_error"></span>-->

     

        <!-- Form - START -->
        @if(Session::has('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif

        <form action = "{{ route('form.store') }}"  class="ml-25 border rounded m-5 p-5" style="width: 100%; background-color: white;" method="POST" enctype="multipart/form-data">
            @csrf
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

            <fieldset>
                <div class="form-row col-md-12 m-5">
                    <!--SEction: img + sex,info -->

                    <div class="form-row">
                            <div class="form-group col-md-6">
                              <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                        </div>


                        
                    <!-- col 1 -->
                   
                    <!-- col 2 -->

                    <!-- Check sex -->
                    <div class="form-group col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" id="ID-radio-sex-H" value="H" required/>
                            <label class="form-check-label" for="inlineRadio1">Homme</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" id="ID-radio-sex-F" value="F" required/>
                            <label class="form-check-label" for="inlineRadio2">Femme</label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control w-20" id="ID-txt-prenom" placeholder="Prenom" name="prenom" value=""  required/>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="ID-txt-nom" placeholder="NOM" name="nom" required />
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="ID-txt-cin" placeholder="CIN" name="cin" required />
                            </div>
                            <!--<input type="button" name="valider" class=" btn btn-primary" value="valider CIN" id="valider-cin" />-->
                        </div>

                        <br>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="ID-txt-email" name="email" placeholder="Email" required />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" id="ID-txt-tele" name="tele" placeholder="tele" required/>
                            </div>
                        </div>
                        <div class="form-row mb-6">
                            <label for="ID-select-ville" >Ville/Commune</label>
                            <select id="ID-select-ville" class="form-control" name="ville" required>
                                <option selected>Choose...</option>
                                <option value="52">Marrakech</option>
                                <option value="52">Safi</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                   

                    <div class="form-group col-md-6">
                        <!-- Select from data base info -->
                        <label for="ID-metier">Métier</label>
                        <select id="ID-metier" class="form-control" placeholder="Métier" name="metier" required>
                        <option selected>Choose...</option>
                                <option value="1">Administration, Moyens g&eacute;n&eacute;raux</option>
                                <option value="2">Assistanat, secr&eacute;tariat</option>
                                <option value="3">Comptabilit&eacute;, Finance</option>
                                <option value="4">M&eacute;tiers Banque et assurances</option>
                                <option value="5">Juridique, Fiscal, Audit, Conseil</option>
                                <option value="6">RH, personnel, formation</option>
                                <option value="7">Education, Enseignement</option>
                                <option value="8">Direction g&eacute;n&eacute;rale, Direction d'unit&eacute;</option>
                                <option value="9">Vente, T&eacute;l&eacute;vente, Assistanat</option>
                                <option value="10">Commercial, Technico Commercial, Service Client</option>
                                <option value="11">Responsable Commercial, Grands comptes</option>
                                <option value="12">Cr&eacute;ation, Design</option>
                                <option value="13">Marketing, Communication</option>
                                <option value="14">Journalisme, M&eacute;dias, Traduction</option>
                                <option value="15">Informatique, Syst&egrave;mes d'information, Internet</option>
                                <option value="16">T&eacute;l&eacute;communication, R&eacute;seaux</option>
                                <option value="17">Chantier, M&eacute;tiers BTP, Architecture</option>
                                <option value="18">Ing&eacute;nierie, Etudes, Projet, R&amp;D</option>
                                <option value="19">Logistique, Achat, Stock, Transport</option>
                                <option value="20">Production, m&eacute;thode, industrie</option>
                                <option value="21">Maintenance, Entretien</option>
                                <option value="22">Qualit&eacute;, S&eacute;curit&eacute;, Environnement</option>
                                <option value="23">Sant&eacute;, M&eacute;dical, Pharmacie</option>
                                <option value="24">H&ocirc;tellerie, Tourisme, Restauration, Loisirs</option>
                                <option value="25">Ouvriers qualifi&eacute;s, Chauffeur</option>
                                <option value="26">Autre</option>
                                <option value="27">M&eacute;tiers de l'agriculture</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <!-- select data from dataBase -->
                        <label for="ID-select-experience">Années d'expérience</label>
                        <select id="ID-select-experience" class="form-control" placeholder="Années d'expérience" name="experience" required>
                            <option selected>Choose...</option>
                                <option value="33">Sans exp&eacute;rience</option>
                                <option value="28">Moins d&rsquo;un an</option>
                                <option value="29">1 &agrave; 2 ans</option>
                                <option value="30">3 &agrave; 5 ans</option>
                                <option value="31">6 &agrave; 10 ans</option>
                                <option value="32">Plus de 10 ans</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    

                    <div class="form-group col-md-6">
                        <!-- select data from dataBase -->
                        <label for="ID-select-etude">Niveau d'études</label>
                        <select id="ID-select-etude" class="form-control" placeholder="Niveau d'études" name="etude[]" required>
                            <option selected>Choose...</option>
                                <option value="34">Niveau secondaire</option>
                                <option value="35">Niveau terminal</option>
                                <option value="36">Formation Professionnelle </option>
                                <option value="37">Baccalaur&eacute;at</option>
                                <option value="38">Universitaire sans dipl&ocirc;me</option>
                                <option value="39">TS Bac +2</option>
                                <option value="40">Licence (LMD), Bac + 3</option>
                                <option value="41">Master 1, Licence  Bac + 4</option>
                                <option value="42">Master 2, Ing&eacute;niorat, Bac + 5 </option>
                                <option value="43">Magist&egrave;re Bac + 7</option>
                                <option value="44">Doctorat</option>
                                <option value="45">Certification</option>
                                <option value="46">Non dipl&ocirc;mante</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <!-- select data from dataBase -->
                        <label for="ID-select-etude">Ecole ou Universite</label>
                        <select id="ID-select-etude" class="form-control" placeholder="Ecole ou Universite" name="ecole[]" required>
                            <option selected>Choose...</option>
                            <option value="47">EMSI</option>
                            <option value="48">ENCG</option>
                            <option value="49">ENSA</option>
                            <option value="50">ENAM</option>
                            <option value="51">FSSM</option>
                           
                        </select>
                    </div>
                   <!-- <div class="form-group col-md-12">
                         select data from dataBase 
                        <label for="ID-select-etude">Lettre de Motivation</label>
                        <textarea class="form-control" id="id-Motivation" rows="4" name="motivation[]" required></textarea>
                    </div>
                </div>-->

                <div class="form-group col-md-12">
                    <div class="form-group">
                        <label for="file-id">Glissez et déposez un fichier ou cliquez ici </label>
                        <input type="file" class="form-control-file btn btn-outline-success" id="file-id " name="file_pdf"  />
                    </div>
                </div>
            
                {{-- formulaire CV -END --}}

				{{-- Btn Navigation -START --}}
				<!--<input type="button" id="btn-next" name="data" class="next btn btn-info" value="Next" />
                <a href="https://www.google.com"><button class="next btn btn-info">Next</button></a>-->
                <input type="submit" name="submit" class="submit btn btn-success" value="next" id="submit_data" />
				{{-- Btn Navigation -END --}}
            </fieldset>


            <div id="output"></div>
        </form>
        <!-- Form - END -->


        <!-- Navigation Button - START -->
         {{-- <div class="ml-25 border rounded m-5 p-5" style="width: 100%; background-color: white;">
           <button type="button" class="btn btn-primary float-right p-1" src="questionaireStag.php" onclick="nextPrev(1)" id="nextBtn">suivant</button>
            <button type="button" class="btn btn-warning float-right p-1" src="Form" onclick="nextPrev(-1)" id="prevBtn">Precedant</button> 
           <button type="button" class="btn btn-warning float-right p-1" src="annonceStag.php" onclick="nextPrev(-1)">Precedant</button> 
        </div>--}}
        <!--  Navigation Button - END -->


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

        <!-- Js code for modale Cropper Image -->
        <script type="test/javascript" src="assets/js.js"></script>

        {{-- PDF js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.10.100/pdf.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.entry.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.10.100/pdf.worker.min.js" ></script>


        <!-- alert blink text -->
        <script>
            function blink_text(){
                $('#message_error').fadeOut(700);
                $('#message_error').fadeIn(700);
            }
            setInterval(blink_text,1000);
        </script>

        <!-- script validate form -->
        <script>
            $('#validate').validate({
                reles: (
                    sex: {
                        required: true,
                    },
                    prenom: {
                        required: true,
                    },
                    nom: {
                        required: true,
                    },
                    cin: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    tele: {
                        required: true,
                    },
                    ville: {
                        required: true,
                    },
                    metier: {
                        required: true,
                    },
                    experience: {
                        required: true,
                    },
                    etude: {
                        required: true,
                    },
                    ecole: {
                        required: true,
                    },
                    motivation: {
                        required: true,
                    },
                ),
                messages: {
                    sex : "Saisir sex",
                    prenom : "Saisir prenom",
                    nom : "Saisir nom",
                    cin : "Saisir cin",
                    tele : "Saisir tele",
                    email : "Saisir email",
                    ville : "Saisir ville",
                    metier : "Saisir metier",
                    experience : "Saisir niveau d'experience",
                    etude : "Saisir niveau d'etude",
                    ecole : "Saisir ecole",
                    motivation : "Saisir une motivation",
                },
                errorPlacement: function (error, element)
                {
                    if(element.attr("name") == "sex" || element.attr("name") == phone)
                    {
                        $('#message_error').empty();error.appendTo('#message_error')
                    }
                    else{
                        error.insertAfter(element);
                    }
                }
            });
        </script>











<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script defer>
   $(function(){
       
      $("#valider-cin").on("click", function() {
          var cin = $("#ID-txt-cin").val();
        alert(cin);
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url:"/condidatur-sp/checkCIN",
            type:"Post",
            data: {cin: cin},
            success: function(response){
                //alert(response);
                if(response =="find"){
                    Swal.fire({
                        icon: 'error',
                        title: 'CIN invalide !',
                        text: "impossible d'inscrire avec ce CIN, car il est deja exist"
                    });
                    $("#btn-next").prop('disabled', true);
                }
                else $("#btn-next").prop('disabled', false);
            },
            error: function(error){
                console.log(error);
            }
        });
      });
   });
</script>

 </body>
</html>
