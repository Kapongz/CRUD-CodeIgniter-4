<?php
namespace App\Controllers;

use App\Models\students;



class StudentController extends BaseController
{
    //show list
    public function index(){
        $Students = new students();
        $data['Student'] = $Students->findAll();
        return view('students/index',$data);
    }
    public function create(){
        return view('students/create');
    }
    //add data
    public function store(){

        $student = new students();

        $file = $this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved())
        {
            $imageName = $file->getRandomName();
            $file->move('uploads/',$imageName);
        }

        $data = [

            'stdid' =>$this->request->getPost('stdid'),
            'image' =>$imageName,
            'name' =>$this->request->getPost('name'),
            'lastname' =>$this->request->getPost('lastname'),
            'gender' =>$this->request->getPost('gender'),
            'branches' =>$this->request->getPost('branches'),
            'tell' =>$this->request->getPost('tell'),
        ];
        $student->save($data);
        return redirect()->to('students')->with('status','Student Data and image Saved');

    }

    //edit data
    public function edit($id)
    {
        $Students = new students();
        $data['Student'] = $Students->find($id);
        return view('students/edit',$data);
    }

    //update data
    public function update($id){

        $Students = new students();
        $std_item = $Students->find($id);
        $old_img_name = $std_item['image'];

        //echo $std_item['image'];
        $file = $this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved())
        {

            
            if(file_exists("uploads/".$old_img_name)){
                unlink("uploads/".$old_img_name);

            }
            $imageName = $file->getRandomName();
            $file->move('uploads/',$imageName);

        }
        else{
            $imageName = $old_img_name;
        }
        $data = [

            'stdid' =>$this->request->getPost('stdid'),
            'image' =>$imageName,
            'name' =>$this->request->getPost('name'),
            'lastname' =>$this->request->getPost('lastname'),
            'gender' =>$this->request->getPost('gender'),
            'branches' =>$this->request->getPost('branches'),
            'tell' =>$this->request->getPost('tell'),
        ];
        $Students->update($id, $data);
        return redirect()->to('/students')->with('status','Student Data and image Saved');
    }

    //delete data
    public function delete($id)
    {
        $Student = new students();

        $data = $Student->find($id);
        $imagefile = $data['image'];
        if(file_exists("uploads/".$imagefile))
        {
            unlink("uploads/".$imagefile);
        }
        $Student ->delete($id);
        return $this->response->redirect(site_url('/students'));


    }
}