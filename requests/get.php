<?php
    require_once '../Model/Database.php';
  
    $get = new db_connection();
  
    header("Content-Type:application/json");

    $data = [];

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $statement = $get->execution("SELECT * FROM universities WHERE id=$id");
        $response = $statement->fetchAll(PDO::FETCH_ASSOC);
        $rows = $statement->rowCount();
        if($rows>0){
            $json_response = json_encode($response);
            echo $json_response;

        }  else{
            echo json_encode(array("message"=>"No University with such id"));
        }
    }

    elseif(isset($_GET['search']) && $_GET['search'] != ''){
        $search = $_GET['search'];
        $statement = $get->execution("SELECT * FROM universities WHERE name LIKE '%$search%' OR location LIKE '%$search%'");
        $response = $statement->fetchAll(PDO::FETCH_ASSOC);
        $rows = $statement->rowCount();
        if($rows>0){
            $json_response = json_encode($response);
            echo $json_response;

        }  else{
            echo json_encode(array("message"=>"No Such University"));
        }
      
    }

    elseif(isset($_GET)){
        $statement = $get->execution("SELECT * FROM universities");
        $response = $statement->fetchAll(PDO::FETCH_ASSOC);
        $rows = $statement->rowCount();

        if($rows>0){
            $json_response = json_encode($response);
            echo $json_response;

        }  else{
            echo json_encode(array("message"=>"No universities so far"));
        }
        
    
    }
