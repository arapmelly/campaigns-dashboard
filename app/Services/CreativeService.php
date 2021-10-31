<?php

namespace App\Services;

use App\Models\Creative;
use Illuminate\Http\Request;

class CreativeService 
{

    public function create(Request $request){

      
        $creative = Creative::create([
            'name' => $request->name,
            'fileURL' => $request->startDate,
        ]);

        return $creative;
    }

    public function update(Request $request, $id){

        $creative = Creative::find($id);
        $creative = $creative->update([
            'name' => $request->name,
            'startDate' => $request->startDate,

        ]);

        return $creative;
    }

    public function delete($id){

        Creative::destroy($id);

        return true;
    }

}
?>
