<?php

// Declaring a function to check if a submitted location exist
function Check_Exist_location($submitted_lat, $submitted_lng)
{
    global $pdo;
    $sql = "SELECT * FROM locations WHERE lat like $submitted_lat AND lng like $submitted_lng";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}

// Declaring a function to insert submitted location into database
function Add_location($submitted_lat, $submitted_lng, $submitted_title, $submitted_type)
{
    global $pdo;
    $sql = "INSERT INTO locations (title, lat, lng, type) VALUES (:title, :lat, :lng, :type)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':title' => $submitted_title, ':lat' => $submitted_lat, 'lng' => $submitted_lng, ':type' => $submitted_type]);
    return $stmt->rowCount();
}

// Declaring a function to get & show submitted locations from database
function Get_locations($params = [])
{
    global $pdo;
    $search_condition = '';
    // Checking which status admin or user wants to check
    if (isset($params['verified']) && in_array($params['verified'], ['0', '1'])) {
        // If the condition was true this code will be added at end of the SQL query
        $search_condition = " WHERE verified = {$params['verified']}";
    } else if (isset($params['keyword'])) {
        // If the condition was true this code will be added at end of the SQL query
        $search_condition = " WHERE verified = 1 AND title like '%{$params['keyword']}%'";
    }
    $sql = "SELECT * FROM locations $search_condition";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

// Declaring a function to get & show a specific location
function Get_location($id)
{
    global $pdo;
    $sql = "SELECT * FROM locations WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}

// Decalaring a function to change the verify status of a location
function Change_Location_status($location_id)
{
    global $pdo;
    $sql = "UPDATE locations SET verified = 1 - verified WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $location_id]);
    return $stmt->rowCount();
}
