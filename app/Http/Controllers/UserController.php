<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Http\Requests\CreateUser; 
use App\Http\Requests\UpdateUser; 


class UserController extends Controller
{
    public function createUser(){

        return view('createuser'); 

    }

    public function saveUser(CreateUser $request){

    //    dd($request->all());
    $user = new User; 
    $user->fname = $request->fname; 
    $user->lname = $request->lname; 
    $user->email = $request->email; 
    $user->phonenumber = $request->phonenumber; 

    $user->save();

    return redirect()->back()->with('success', 'User has been added successfully');

    }

    
    public function showUsers(){

        $users = User::paginate(4);//it's a built in function for pagination, we use ->links() function in blade.php to show links 
        return view('users', compact('users')); 

    }
    
     
    public function viewUser($id){

        $user = User::findOrFail($id);
        return view('viewuser', compact('user')); 

    }

    public function updateUser(UpdateUser $request, $id){

        $user = User::findOrFail($id); 

        $user->fname = $request->fname; 
        $user->lname = $request->lname; 
        $user->email = $request->email; 
        $user->phonenumber = $request->phonenumber; 

        $user->save();
    
        return redirect()->back()->with('success', 'User has been updated successfully');
    
        }

        public function deleteUser(Request $request, $id){



            $request->validate([

                'userid' => 'required', 

            ]); 

            if($id == $request->userid)
            {
            $user = User::findOrFail($id); 
            $user->delete();
            return redirect('/users');
           }

           return redirect()->back()->with('danger', 'User cannot be deleted, id is not the same');

    }
}
