<?php
//db connection
function connection()
{
   global $config;
   $db = new mysqli(
      $config['db']['host'],
      $config['db']['username'],
      $config['db']['password'],
      $config['db']['db']
   ) or die($db->error);
   $db->query("SET NAMES UTF8");
   return $db;
}

// test_input
function test_input($data)
{
   $newArray = [];
   if (is_array($data)) {
      for ($i = 0; $i < count($data); $i++) {
         $data[$i] = addslashes($data[$i]);
         $data[$i] = strip_tags($data[$i]);
         $data[$i] = trim($data[$i]);
         array_push($newArray, $data[$i]);
      }
      return $newArray;
   }
}

//getInsert// ma'lumot yozish
function getInsert($tableName, $array1, $array2)
{
   if (is_array($array1) && is_array($array2)) {
      if (count($array1) == count($array2)) {
         $db = connection();
         $tbName = addslashes($tableName);
         $query = "INSERT INTO {$tbName} (";
         for ($i = 0; $i < count($array1); $i++) {
            $query .= $array1[$i] . ',';
         }
         $query = rtrim($query, ',');
         $query .= ") VALUES (";
         for ($i = 0; $i < count($array2); $i++) {
            $query .= "'" . strip_tags(addslashes($array2[$i])) . "',";
         }
         $query = rtrim($query, ',');
         $query .= ")";
         $sql = $db->query($query);
         if ($sql)
            return true;
         return false;
      } else {
         return 'malumotlar teng emas';
      }
   } else {
      return 'malumotni massiv korinishida kiriting';
   }
}
