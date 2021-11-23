<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
    	return view('admin.profile.profile');
    }

    public function profileUpdate(Request $request)
    {
    	$name 	= $request->name;
    	$email 	= $request->email;
    	$mobile = $request->mobile;

    	$admin_details = Auth::user();


        if ($request->hasFile('image'))
        {  
            $image = $request->file('image');   
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/admin_image');
            $image->move($destinationPath, $imagenamephoto);   
          
        }

        if(isset($imagenamephoto))
        {
            $finalphoto  = $imagenamephoto;

        }else{
            $finalphoto = '';
        }

    	DB::table('users')
                ->where('id',$admin_details->id)
                ->update(['name' => $name , 'email' => $email,'mobile'=> $mobile,'image' => $finalphoto]);

        return redirect('admin/profile')->with('success','Profile Update Successfully');
    }

    public function changepswd(Request $request)
    {
    	$admin_details 		= Auth::user();
        $id                 = $admin_details->id;
        $old_password       = $request->OldPassword;
        $new_password       = $request->NewPassword;
        $confirm_password   = $request->password;

        if(empty($old_password))
        {
            return redirect('/admin/profile')->with('danger','All field are required');

        }else{
            if(empty($new_password))
            {
                return redirect('/admin/profile')->with('danger','New password must be required');

            }elseif(empty($confirm_password))
            {
                return redirect('/admin/profile')->with('danger','confirm password must be required');

            }else{
                if(Hash::check($old_password, $admin_details->password))
      			{ 
      				if($new_password == $confirm_password)
                    {
                    	$obj_user = User::find($id);
				        $obj_user->password = Hash::make($confirm_password);
				        $obj_user->save(); 

                        return redirect('/admin/profile')->with('success','Login with your new password');

                    }else{
                        return redirect('/admin/profile')->with('danger','New password and confirm password does not match');
                    }
      			}else{
      				return redirect('/admin/profile')->with('danger','Old password does not match . Please fill correct old password');
      			}
            }
        }

    }

}
