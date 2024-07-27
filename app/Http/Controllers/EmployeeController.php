<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Voucher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Exception;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = User::find(currentUserId());
        return view('user.profile', compact('employee'));
    }

    public function save_profile(Request $request)
    {
        try {
            $data = User::find(currentUserId());
            $data->name = $request->name;
            $data->contact_no = $request->contact_no;
            $data->email = $request->email;
            $data->date_of_birth = $request->date_of_birth;
            $data->address = $request->address;
           
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/employee'), $imageName);
                $data->image = $imageName;
            }
            if ($data->save()) {
                // $this->setSession($data);
                $this->notice::success('Your Changes Have been Saved');
                return redirect()->back();
            }
        } catch (Exception $e) {
            // dd($e);
            $this->notice::error('Something went wrong. Please try again');
            return redirect()->back()->withInput();
        }
    }

    public function deleteImage(Request $request)
    {
        try {
            $employee = User::find(currentUserId());

            if ($employee->image) {
                // Delete image from storage
                Storage::delete($employee->image);
                // Clear image field in the database
                $employee->image = null;
                $employee->save();
                $this->notice::success('Profile image deleted successfully.');
            } else {
                $this->notice::error('No image found to delete.');
            }
            return redirect()->back();
        } catch (\Exception $e) {
            // Handle exception
            $this->notice::error('An error occurred. Please try again.');
            return redirect()->back();
        }
    }


    public function change_password(Request $request)
    {
        try {
            $data = User::find(currentUserId());

            
            if (!Hash::check($request->current_password, $data->password)) {
                $this->notice::error('Current password is incorrect.');
                return redirect()->back();
            }

            // Validate new password and confirmation
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Update the password
            $data->password = Hash::make($request->password);

            if ($data->save()) {
                $this->notice::success('Password has been changed successfully.');
                return redirect()->back();
            }
        } catch (Exception $e) {
            // dd($e); 
            $this->notice::error('Something went wrong. Please try again');
            return redirect()->back()->withInput();
        }
    }
    
    // ProfileController.php
    public function changeImage(Request $request)
    {
        try {
            $employee = User::find(currentUserId());

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/employee'), $imageName);
                $user->image = $imageName;
                if ($user->save()) {
                $this->notice::success('Image changed successfully.');
                return redirect()->back();
            }else {
                $this->notice::error('Please select a valid image file.');
                return redirect()->back();
            }
        }
        } catch (\Exception $e) {
            // dd($e);
            $this->notice::error('An error occurred. Please try again.');
            return redirect()->back();
        }
    }
    
    public function leave_apply(){
        return view('user.leave');
    }
    public function assignment(){
        return view('user.assignment');
    }
    public function report_panel(){
        return view('user.report');
    }
    public function profile_update(){
        $employee = User::find(currentUserId());
        return view('user.profile_update',compact('employee'));
    }

    public function changePassword(){
        $employee = User::find(currentUserId());
        return view('user.changepass',compact('employee'));
    }


}
