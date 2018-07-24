<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Buletin;
use Auth;
// use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Storage;
use File;

class BuletinController extends Controller
{
	//add buletin
    public function getFormBuletin(){
    	$buletin = Buletin::get();
        return view('user.buletin.form-buletin', compact('buletin'));
    }

    // public function setFormBuletin(Request $request){
    // 	$this->validate($request, [
    //          'file_buletin' => 'required|mimes:pdf| max:35480',
    //          'judul_buletin' => 'required',   
    //     ]); 

    //     $input['file_buletin'] = $request->file_buletin;
    //     $input['judul_buletin'] = $request->judul_buletin;

    //     if ($request->hasFile('file_buletin')) {
    //         $file_buletin = $request->file('file_buletin');
    //         $file_buletin_name = time() . '.' .$file_buletin->getClientOriginalExtension();
    //         //Image::make($image_post)->resize(1850, 1350)->save( public_path('/file_buletin/' . $file_buletin_name ));
            
    //     }
        
       
    //    $input->save( public_path('/file-majalah/' . $file_buletin_name ));
    //    $input['file_buletin'] =  $file_buletin_name;
        
    //     Buletin::create([
    //             'file_buletin' => $input['file_buletin'],
    //             'judul_buletin' => $input['judul_buletin'],
                
    //         ]);
    //     return back()
    //         ->with('success','Post submitted successfully.');

    // }
    public function setFormBuletin(){
    	$validation = Validator::make(Input::all(), 
        array(
           
            'file_buletin' => 'required|mimes:pdf|max:60480',
           'judul_buletin' => 'required',
           'cover_buletin' => 'required|mimes:jpg,png,gif,jpeg|max:10480',
            )
        );
        if($validation->fails()) {
            //return jika validasi gagal
            return Redirect::back()->withErrors($validation->messages());
        }
        // mengeset destinasi
            $destinationPath = public_path('/file-majalah');
            $destinasithumb = public_path('/thumbnail');
            // mendapatkan ekstensi file yang dikirim user
            $fileName= Input::file('file_buletin')->getClientOriginalName();
            $fileName2 = Input::file('cover_buletin')->getClientOriginalName();

            //memindahkan file ke dalam storage
            Input::file('file_buletin')->move($destinationPath, $fileName);
            Input::file('cover_buletin')->move($destinationPath, $fileName2);
            // mencatat dalam database
            Buletin::create([
                'file_buletin' => $fileName,
                'judul_buletin' =>Input::get('judul_buletin'),
                'cover_buletin' => $fileName2,
               
            ]);
            return back()
           ->with('success','Post submitted successfully.');
    }
    //edit buletin
     public function editFormBuletin($id_buletin)
    {
        $buletin = Buletin::find($id_buletin);
        return view('user.buletin.edit-buletin', compact('buletin'));
    }

    public function updateFormBuletin($id_buletin){
    	$buletin = Buletin::find($id_buletin);

    	$validation = Validator::make(Input::all(), 
        array(
           'file_buletin' => 'mimes:pdf|max:60480',
           'judul_buletin' => 'required',
           'cover_buletin' => 'required|mimes:jpg,png,gif,jpeg|max:10480',
           	)
        );
         if($validation->fails()) {
            //withInput keep the users info
            return Redirect::back()->withInput()->withErrors($validation->messages());
        } 

            $destinationPath = public_path('/file-majalah');
            $fileName= Input::file('file_buletin')->getClientOriginalName();
            $fileName2 = Input::file('cover_buletin')->getClientOriginalName();
            Input::file('file_buletin')->move($destinationPath, $fileName);
            Input::file('cover_buletin')->move($destinationPath, $fileName2);
        	Buletin::where('id_buletin', $id_buletin)->update([
                'file_buletin' => $fileName, 
                'judul_buletin' => Input::get('judul_buletin'),
                'cover_buletin' => $fileName2, 
            ]);  

        return redirect()->back();
    }

    //delete buletin
    public function deleteBuletin(){
    	 Buletin::destroy($id_buletin);
        return back();
    }


    //view full buletin
    public function index($file_buletin){
    	 $buletin = Buletin::find($file_buletin);
    	 $buletin2 = Buletin::where('file_buletin','=',$file_buletin)->get();
    	 return view('user.buletin.view-buletin', ['buletin2' => $buletin2 ]);
    }
}
