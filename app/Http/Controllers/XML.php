<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Block\Element\Document;
use SimpleXMLElement;
use XMLWriter;

class XML extends Controller
{
    public function xml()
    {

//             $xmldoc = 
            
//                       <<< XML
            
                        // <? xml version=1.0 encoding='UTF-8
// <!-- //                         <Payments> -->
        //    
// <!-- //                         </Payments> -->
           
// <!-- //                        XML; -->
// <!-- // // dd($xmldoc); -->
// <!-- //                        $xml = new XMLWriter(); -->

// <!-- //                     //   $xml = simplexml_load_file('');

//             $approved = DB::table('students')
//             ->join('users', 'users.id', '=', 'students.stud_id')
//             ->select('*')
//             ->where('status', '=', 'Accepted')->get();
            
//         foreach ($approved as $app) {
//          $payment = $xml->addChild('Payment-Email',$app->email);
//          $payment = $xml->addChild('Payment-First Name',$app->firstname);
//          $payment = $xml->addChild('Payment-Last Name',$app->lastname);
//          $payment = $xml->addChild('Payment-Course ID',$app->course_id);
//          $payment = $xml->addChild('Payment-Email',$app->email);
//          $payment = $xml->addChild('Payment-Email',$app->email);
//         }
//         return $xml; -->

$fxml=Storage::get('fxml.xml');

$approved = DB::table('students')
            ->join('users', 'users.id', '=', 'students.stud_id')
            ->join('courses', 'courses.c_id', '=', 'students.course_id')
            ->select('*')
            ->where('status', '=', 'Accepted')->get();

            $xml= '<Payments>'."\r\n";
            foreach($approved as $accept){

                $xml.='  '.'<Payment>'."\r\n";
                $xml.='  '.'<First Name>'.$accept->firstname.'</First Name>'."\r\n";
                $xml.='  '.'<Last Name>'.$accept->lastname.'</Last Name>'."\r\n";
                $xml.='  '.'<Course>'.$accept->c_name.'</Course>'."\r\n";
                $xml.='  '.'<Email>'.$accept->email.'</Email>'."\r\n";
                $xml.='  '.'<\Payment>'."\r\n";
            }
$xml ='<Payments>'."\r\n";
$filename = 'Payments'.$fxml.''.'xml';
Storage::put($filename,$xml);
$fxml=$fxml+1;
Storage::put('fxml.xml',$fxml);
return Storage::download($filename);
       
    }
}