<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;

class PerfumeController extends Controller
{
    public function getPerfumes() {

        $perfumes = Perfume::all();

        return view( "perfumes", [
            "perfumes"=> $perfumes
        ]);
    }

    public function newPerfume(Request $request) {

        // $request->validated();
        // print_r($request->all());
        // $request->validate(
            
        //     [   
        //         'uEmail'             => 'required|unique:members',
        //         'uPassword'          => 'required|min:8'
        //     ],
        //     [   
        //         'uEmail.required'    => 'Please Provide Your Email Address For Better Communication, Thank You.',
        //         'uEmail.unique'      => 'Sorry, This Email Address Is Already Used By Another User. Please Try With Different One, Thank You.',
        //         'uPassword.required' => 'Password Is Required For Your Information Safety, Thank You.',
        //         'uPassword.min'      => 'Password Length Should Be More Than 8 Character Or Digit Or Mix, Thank You.',
        //     ]
        // );

        return view( "new_perfume" );
    }

    public function storePerfume( REQUEST $request ) {
        $perfume = new Perfume;

        $perfume->name = $request->name;
        $perfume->type = $request->type;
        $perfume->price = $request->price;
        $perfume->save();

        $request->session()->flash("success","The writing was successful! Please refresh the page for another data.");

        return redirect( "/new-perfume" );
    }

    public function editPerfume( $id ) {

        $perfume = Perfume::find( $id );

        return view( "edit_perfume", [
            "perfume" => $perfume
        ]);
    }

    public function updatePerfume( Request $request ) {
            $perfume = Perfume::where("name",$request->name)->first();

            $perfume->name = $request->name;
            $perfume->type = $request->type;
            $perfume->price = $request->price;

            $perfume->save();
            return redirect("/perfumes");

    }

    public function deletePerfume( $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();

        return redirect( "/" );

    }
}
