<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\XmlData;
use App\Models\Flight;
class TestxmlController extends Controller
{
   public function index(Request $Req)
    {
        if($Req->isMethod("POST")){
            $XmlDataString = file_get_contents(public_path('data_light.xml'));
            $XmlObject = simplexml_load_string($XmlDataString);
            $Json = json_encode($XmlObject);
            $ArrayOfAParsedFile = json_decode($Json, true); 
            
           if(count($ArrayOfAParsedFile['offers']) > 0){

                $TheArrayOfTheSpecifiedXmlFile = array();
                foreach($ArrayOfAParsedFile['offers'] as $Index => $Data){
                     foreach ($Data as $Vdata) {
                  $TheArrayOfTheSpecifiedXmlFile[] = [
                    "id" => $Vdata['id'],
                        "mark" => $Vdata['mark'],
                        "model" => $Vdata['model'],
                        "generation" => $Vdata['generation'],
                        "year" => $Vdata['year'],
                        "run" => $Vdata['run'],
                        "color" => $Vdata['color'],
                        "body-type" => $Vdata['body-type'],
                        "engine-type" => $Vdata['engine-type'],
                        "transmission" => $Vdata['transmission'],
                        "gear-type" => $Vdata['gear-type'],
                        "generation_id" => $Vdata['generation_id'],
                    ];
                }
               
            }
            error_reporting(0);
          //  print_r($dataArray);
         
      $RowCount = XmlData::orderBy('id', 'desc')->count();
      XmlData::where('id', $TheArrayOfTheSpecifiedXmlFile['id'])->delete();
         for($i=0;$i<$RowCount;$i++)
          {
           XmlData::updateorcreate($TheArrayOfTheSpecifiedXmlFile[$i]);
        }
        return back();
           }
        }

        return view("xml-data");
    }
}
