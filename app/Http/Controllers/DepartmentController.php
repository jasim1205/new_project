<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::paginate(10);
        return view('department.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try{
            $department=new Department;
            $department->name=$request->name;
           if( $department->save()){
             $this->notice::success('Successfully saved');
            return redirect()->route('department.index');
           
           }else{
             $this->notice::error('Please try again!');
            return redirect()->back()->withInput();         
        }
      }catch(Exception $e){
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();        
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $department=Department::findOrFail(encryptor('decrypt', $id));
        return view('department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
         try{
            $department=Department::findOrFail(encryptor('decrypt', $id));
            $department->name=$request->name;
            if($department->save()){
                 $this->notice::success('Successfully updated');
                return redirect()->route('department.index');
             }else{
                $this->notice::error('Please try again!');
                return redirect()->back()->withInput();               
            }
          }catch(Exception $e){
            //dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();           
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $department= Department::findOrFail(encryptor('decrypt', $id));
        if($department->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();        
        }
    }
}
