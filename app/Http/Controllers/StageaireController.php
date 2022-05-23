<?php

namespace App\Http\Controllers;
use App\Models\stageaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class StageaireController extends Controller
{

   

    /**
     * indexCondidatureSP()
     * @param : request
     * * this function used to redirect user from Anonce, with type as : Stage  *
     */
  
     public function insertquest(){
         return view('clientSide.questionnaireStag');
     }
    
    
     /**
     * storeStage()
     * @param : request
     * * this function used to Insert condidature:
     */
     public function createquest(Request $request){


        /* $region = $request->input('region');
        $dateDebut = $request->input('dateDebut');
        $dateFin = $request->input('dateFin');
        
        $data=array(
        "region"=>$region,
        "dateDebut"=>$dateDebut, 
        "dateFin"=>$dateFin
       
    );
        Form::table('_forum')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/inscription">Click Here</a> to go back.';*/




       $rules = [
			'region' => 'required|string|min:3|max:255',
			'dateDebut' => 'required|string|min:3|max:255',
			'dateFin' => 'required|string|min:3|max:255'
		];

        $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('/inscription')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$stageaire = new stageaire;
                $stageaire->region = $data['region'];
                $stageaire->dateDebut = $data['dateDebut'];
				$stageaire->dateFin = $data['dateFin'];
				$stageaire->save();
				return redirect('/inscription')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('/inscription')->with('failed',"operation failed");
			}
		}


       /*  $_form = new _form();

         $_form->ville = $request->input('region');
        $_form->ville = $request->input('dateDebut');
        $_form->ville = $request->input('dateFin');       
        
        $_form->save();

        $req = $request->validate([


            'region'            =>'required',
            'dateDebut'         =>'required',
            'dateFin'           =>'required'
        ]);

        _form::insert($request);
        
        return redirect()->route('/home')->with('success','votre demande est bien enregistre!');*/

     }

       public function insertform(){
        
        //$urlData = getURLList();
        return view('ClientSide.Form');
     }
/**
     * storeStage()
     * @param : request
     * * this function used to Insert condidature:
     */
    public function insert(Request $request){

        

       /* $sex = $request->input('sex');
        $prenom = $request->input('prenom');
        $nom = $request->input('nom');
        $cin = $request->input('cin');
        $email = $request->input('email');
        $tele = $request->input('tele');
        $ville = $request->input('ville');
        $file_cv = $request->input('file_cv');
        $data=array(
        "sex"=>$sex,
        "prenom"=>$prenom, 
        "nom"=>$nom,
        "cin"=>$cin,
        "email"=>$email,
        "tele"=>$tele,
        "ville"=>$ville,
        "file_cv"=>$file_cv
        );
        Form::table('_forum')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/inscription">Click Here</a> to go back.';*/




        $rules = [
			'sex' => 'required|string|min:3|max:255',
			'prenom' => 'required|string|min:3|max:255',
			'nom' => 'required|string|min:3|max:255',
            'cin' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'tele' => 'required|string|min:3|max:255',
            'ville' => 'required|string|min:3|max:255',
            'file_pdf' => 'required|string|min:3|max:255',
		];


        $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('inscription')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$stageaire = new Stageaire;
                $stageaire->sex = $data['sex'];
                $stageaire->prenom = $data['prenom'];
				$stageaire->nom = $data['nom'];
                $stageaire-> cin = $data['cin'];
				$stageaire->email = $data['email'];
                $stageaire-> tele = $data['tele'];
                $stageaire-> ville = $data['ville'];
                $stageaire-> file_cv = $data['file_cv'];
                
				$stageaire->save();     

                   stageaire::insert($request);

				return redirect('/questionnaireStag')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('/inscription')->with('failed',"operation failed");
			}
		}
    }
}

       /* $_form = new _form();
        $_form->sex = $request->input('sex');
        $_form->prenom = $request->input('prenom');
        $_form->nom = $request->input('nom');
        $_form->cin = $request->input('cin');
        $_form->email = $request->input('');
        $_form->tele = $request->input('');
        $_form->ville = $request->input('ville');
        $_form->file_pdf = $request->input('file_pdf');
      
        $_form->save();

        $req = $request->validate([
            'sex'               =>'required',
            'prenom'            =>'required',
            'nom'               =>'required',
            'cin'               =>'required',
            'email'             =>'required',
            'tele'              =>'required',
            'ville'             =>'required',
            'poste'             =>'nullable',
            'metier'            =>'required',
            'annee_experience'  =>'nullable',
            'niveau_etude'      =>'nullable',
            'ecole'             =>'nullable',
            'file_pdf'        =>'nullable',
            //'upload_image'      =>'nullable',
            'file_pdf'          =>'nullable',
           
        ]);
        
       
        _form::insert($request);
   
        return redirect()->route('/questionnaire')->with('success','veuillez remplir ce questionnaire!');
*/
    
            
        
     //$newImage = time() . '-' . $request->nom . '.' . $request->upload_image->extension();
        //$request->upload_image->move(public_path('images/profiles'), $newImage);
       // dd("tst sp");
       // $newPDF = time() . '-' . $request->file_pdf . '.' . $request->file_pdf->getClientOriginalExtension();
       // $pdf = $request->file_pdf->move(public_path('cv'), $newPDF);
       
        // $textContent = $this->getTextFromPDF($pdf);
        // $dataAnonce     = anonce::where('id',$req["idAnnonce"])->get();
        // $jobDescription = $dataAnonce[0]['Discription_poste'];
        
        // $score = $this->getScore($textContent,$jobDescription,$request->idAnonce);
        // $req +=["score"=>$score];


    /**
     * store()
     * @param : request
     * * this function to Add anonces 
     */
   /*public function store(Request $request){
        
        $req = $request->validate([
            'idAnnonce'         =>'nullable',
            'sex'               =>'nullable',
            'prenom'            =>'nullable',
            'nom'               =>'nullable',
            'email'             =>'nullable',
            'tele'              =>'nullable',
            'ville'             =>'nullable',
            'poste'             =>'nullable',
            'metier'            =>'nullable',
            'annee_experience'  =>'nullable',
            'niveau_etude'      =>'nullable',
            'upload_image'      =>'nullable',
            'file_pdf'          =>'nullable',
            'region'            =>'nullable',
            'dateDebut'         =>'nullable',
            'dateFin'           =>'nullable'
        ]);
        
        
        $newImage = time() . '-' . $request->nom . '.' . $request->upload_image->extension();
        $request->upload_image->move(public_path('images/profiles'), $newImage);
        dd($newImage);
        $newPDF = time() . '-' . $request->file_pdf . '.' . $request->file_pdf->getClientOriginalExtension();
        $pdf = $request->file_pdf->move(public_path('cv'), $newPDF);
        // dd($pdf);
        //get text from pdf to having scor CV:
        $textContent = $this->getTextFromPDF($pdf);
        $dataAnonce     = anonce::where('id',$req["idAnnonce"])->get();
        $jobDescription = $dataAnonce[0]['Discription_poste'];
        
        $score = $this->getScore($textContent,$jobDescription,$request->idAnonce);
        $req +=["score"=>$score];

        //insert Condidature
        stageaire::insert($req);

        return redirect()->route('stageaire.store', $req['idAnnonce'])->with('success','votre demande est bien enregistrer !');

    }*/

    /**
     * storeStage()
     * @param : request
     * * this function used to Insert condidature:
     */
     /*public function storeStage(Request $request){
        //dd("stor");
        $req = $request->validate([
            'idAnnonce'         =>'nullable',
            'sex'               =>'required',
            'prenom'            =>'required',
            'nom'               =>'required',
            'cin'               =>'required',
            'email'             =>'required',
            'tele'              =>'required',
            'ville'             =>'required',
            'poste'             =>'nullable',
            'metier'            =>'required',
            'annee_experience'  =>'nullable',
            'niveau_etude'      =>'nullable',
            'ecole'             =>'nullable',
            'motivation'        =>'nullable',
            'upload_image'      =>'nullable',
            'file_pdf'          =>'nullable',
            'region'            =>'nullable',
            'dateDebut'         =>'nullable',
            'dateFin'           =>'nullable'
        ]);
        
        
        $newImage = time() . '-' . $request->nom . '.' . $request->upload_image->extension();
        $request->upload_image->move(public_path('images/profiles'), $newImage);
       // dd("tst sp");
        $newPDF = time() . '-' . $request->file_pdf . '.' . $request->file_pdf->getClientOriginalExtension();
        $pdf = $request->file_pdf->move(public_path('cv'), $newPDF);
       
        // $textContent = $this->getTextFromPDF($pdf);
        // $dataAnonce     = anonce::where('id',$req["idAnnonce"])->get();
        // $jobDescription = $dataAnonce[0]['Discription_poste'];
        
        // $score = $this->getScore($textContent,$jobDescription,$request->idAnonce);
        // $req +=["score"=>$score];

        stageaire::insert($req);
    //    //dd("ok store");
        return redirect()->route('stageaire.indexSP', $req['idAnnonce'])->with('success','votre demande est bien enregistrer !');

    }*/

    
   /**
     * get Scoor()
     * @param : text 
     * * this function used to compare twoo text, and return the score %*
     */

    /*public function getScore($text,$jobDescription,$idAnonce){
        
        $score          =  similar_text($text, $jobDescription, $percent);
        return $percent;
    }*/

     /**
     * get getTextFromPDF()
     * @param : path  
     * * this function used to extract text from PDF, and return the text *
     */
    /*public function getTextFromPDF($path){
        $parser = new \Smalot\PdfParser\Parser(); 
        $pdf = $parser->parseFile($path); 
        return $pdf->getText();
       
    }*/
     /**
     * get checkCIN()
     * @param : path  
     * * this function used to Validate CIN*
     */
    /*public function checkCIN(Request $request){
        //Ajouter ces Critaire: nom prenom, cin periode: pour les critaire des filtre de Validation CIN..
        $cin = $request->cin;
        $res = stageaire::where("CIN",$cin)->get();
        if(count($res)>=1){return response("find");}
        else return response("not found");
        //dd($res);

        return redirect()->route('stageaire.indexSP')->with('success','votre demande est bien enregistrer !');
    }
    /**
     * get listCv()
     * @param : path  
     * * this function used to get all CVs.
     */
    /*public function listCv(){
        $cv = stageaire::all();
        return view('adminSide.Recrutement.CVTheque.ListeCV')->with('CVs',$cv);
    }*/


     /*public function listCvByAnonce(Request $req){
         
        $idAnnonce = $req->idAnonce;
        $cv = stageaire::where('idAnonce',$idAnnonce)->get();
        
        return view('adminSide.Recrutement.CVTheque.ListeCVbyAnonce')->with('CVAn',$cv);


    }*/

    
    /*public function MailCondidat(Request $request){
        //dd($request->idCondidat);
        $infoCondidat = stageaire::where('id',$request->idCondidat)->get();
        //dd($infoCondidat);
        return view('adminSide.Recrutement.mail.mailingCondidat')->with('condidat',$infoCondidat);
    }*/

    /*public function addMail(){
        return view('adminSide.Recrutement.mail.buildMail');
    }*/
    

