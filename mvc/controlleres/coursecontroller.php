<?php 
include "../models/course.php";
class CourseController{

    public function list(){
        $course1 = new courses();
        $course1->all();
        require "../view/list_courses.php";
    }
    public function insert(){
        require "../view/insert_courses.php";
    }
    public function store($data){
        $course1 = new courses();
        $course1->store($data);
            require "../view/list_courses.php";
    }
    public function edit($id){
        require "../view/update_courses.php";
    }
    public function update($data){
        $course1 = new courses();
        $course1->update($data);
            require "../view/list_courses.php";
    }
    public function delete($id){
        $course1=new courses();
        $course1->delete($id);
        require "../view/delete_courses.php";
    }
        
    }
    $userController = new CourseController();
    echo "<pre>";
    print ("localhost".$_SERVER['REQUEST_URI']);
    echo "</pre>";
    if($_SERVER['REQUEST_URI'] == 'localhost/mvc/view/coursecontroller.php'){
        $userController->list();  
      }
      elseif($_SERVER['REQUEST_URI'] == 'localhost/mvc/view/insert_courses.php'){
        $userController->insert();  
      }
      elseif($_SERVER['REQUEST_URI'] == 'localhost/mvc/view/update_courses.php'){
        $userController->edit($id);  
      }
      elseif($_SERVER['REQUEST_URI'] == 'localhost/mvc/view/delete_courses.php'){
        $userController->delete($id);  
      }
      die();


