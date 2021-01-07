<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Http\Request;
use Session;
// use Request;
use GuzzleHttp\Client;
use App\Patient;
use App\Record;
use App\diabetespatient;
use Charts;
use DB;

class ClientController extends Controller
{
    public function start()
    {
        return view ('fornt.index');
    }
    public function login()
    {
        return view ('fornt.login');
    }
    public function working()
    {
        return view ('fornt.working');
    }

    public function signup()
    {
        return view ('fornt.Signup');
    }
    public function userdata()
    {
        $data  = new Record;
        $id  = 1;

        $found = Record::where('RPid',$id)->first();

        return view ('fornt.userdata', compact('data','data'));
    }
    public function test(Request $req)
    {
        $User = new Patient();
        $User->Firstname = $req->fname;
        $User->Lastname = $req->lname;
        $User->Age = $req->age;
        $User->Gender = $req->gender;
        $User->Height = $req->height;
        $User->Weight = $req->weight;
        $User->CNIC = $req->cnic;
        $User->Address = $req->address;
        $User->Postalcode = $req->postalcode;
        $User->Contactno = $req->cn;
        $User->Email = $req->email;
        $User->Glucose = $req->diabetes;
        $User->Cardio = $req->cardio;
        $User->Smoking = $req->smoking;
        $User->Active = $req->active;
        $User->Hospital = $req->hospital;
        $User->City = $req->city;
        $User->Hospital = $req->hospital;
        $User->Cholestrol = $req->chol;
        $User->Username = $req->username;
        $User->Password = $req->password;
        $User->save();
        // Session::flash('register','Thanks for Joining us!');
        alert()->success('Successfully you are Register');
        return view ('fornt.login');
    }
    //
    public function Authen(Request $req)
    {
        $found = Patient::where('Username',$req->username)->where('Password',$req->password)->first();
        if($found!=Null)
        {
            if($req->user == 'cardio')
            {
                $dele = $found->Record;
                $diab = $found->diabetespatient;
                alert()->message('WELCOME BACK');
                return view ('fornt.client_protal',compact('found','dele','diab'));
            }
            elseif($req->user == 'diabetes')
            {
                $dele= $found->diabetespatient;
                alert()->message('WELCOME BACK');
                return view ('fornt.diabetespatient',compact('found','dele'));
            }

        }
        else
        {
            alert()->warning('Wrong Username and Password');
            return view ('fornt.login');
        }
    }

    public function AddClientData(Request $req, $pid)
    {
        $del = new Record;

        $systolic = $req->hiper;
        $diastolic = $req->loper; // here i will two varible and save the data in it what user enter
        $plusrate = $req->plusrate;
        $diabetes = $req->diabetes;
        $del->RPid = $pid;
        $del->Hiper = $req->hiper;  // here am saving this user input in database
        $del->Loper = $req->loper;
        $del->Plusrate = $req->plusrate;
        $del->Status ='0';       // this is status who calculate the api....
        $del->BMI ='0';       // this is status who calculate the api....
        $del->Pred1 ='0';       // this is status who calculate the api....
        $del->Pred2 ='0';       // this is status who calculate the api....
        $del->Pred3 ='0';       // this is status who calculate the api....
        $Patient = Patient::where('Pid', $pid)->get()->first();
        // $del->save();  //  dd($Patient,$del->id);

        $delId = $del->rid;

        // yaha pr ye update ek rcord ko kar raha hy lekin sth e ek blank status wali entry b kar raha hy.
        $flask_app_url = "http://127.0.0.1:5000/api";  // here is the api addresss

        $client = new Client();

        $res = $client->post($flask_app_url, [          //here am passing api parameter
            'json' => [
                'pid' =>$pid,
                'plusrate'=>$plusrate,
                'systolic' => $systolic,
                'diastolic' => $diastolic,  // this is parameter what user enter
                'glucose'=>$diabetes,]
                ]);

        $data_body = $res->getBody();
        //echo $data_body;                    // here we display the output after calculation in array foramte of json
        $Result = json_decode($data_body,true);

        $temp = $Result['bp']; // here am separate the specific record what i need it
        $bmi = $Result['bm'];
        $bp = $Result['bp'];
        

    //    try {
    //     $newdel = Record::where('rid',$delId)->first();

    //     $newdel->Status = $temp;
    //     $newdel->BMI = $bmi;

    //     $newdel->save();
    //    } catch (\Throwable $th) {

    //        dd($th);
    //     }
        // redirect(Request::url());
        echo '<script type="text/javascript">'
               , 'history.go(-1);'
               ,'window = window.location.reload();'
			   , '</script>';
        // return redirect()->refresh();

        //return redirect()->back()->with('error', 'Something went wrong.');
}
public function AddClientDataDiabetes(Request $req, $pid)
    {
        $del = new diabetespatient;

        $diabetes = $req->glu;
        $bp = $req->bp;
        $del->pid = $pid;
        $del->diabetes = $req->glu;  // here am saving this user input in database
        $del->bp = $req->bp;
   
        $flask_app_url = "http://127.0.0.1:5000/dia";  // here is the api addresss

        $client = new Client();

        $res = $client->post($flask_app_url, [          //here am passing api parameter
            'json' => [
                'pid' =>$pid,
                'glucose'=>$diabetes,
                'systolic' => $bp]
                ]);

        $data_body = $res->getBody();
        echo $data_body; 
        // redirect(Request::url());
        // echo '<script type="text/javascript">'
        //        , 'history.go(-1);'
        //        ,'window = window.location.reload();'
		// 	   , '</script>';
}

    public function graphdata()
    {
    //     $products = Record::where(DB::raw("(DATE_FORMAT(created_at,'%H'))"), date('H'))->get();
    //     $chart = Charts::database($products, 'bar', 'highcharts')
    //                 ->title('Product Details')
    //                 ->elementLabel('Total Products')
    //                 ->dimensions(1000, 500)
    //                 ->groupBy(date('H'), true);
    //    return view('fornt.graph', ['chart' => $chart]);

        return view('fornt.graph');
    }


}
