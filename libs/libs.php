<?php
//db connection// databasr bilan aloqa
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

// test_input malumot keladi sleshdan, hatml codlardan ortiqcha probeldan tozalab yana massiv qaytaradi.
function test_input($data)
{
   $newArray = [];
   if (is_array($data)) {
      for ($i = 0; $i < count($data); $i++) {
         // $data[$i] = addslashes($data[$i]);
         $data[$i] = strip_tags($data[$i]);
         $data[$i] = trim($data[$i]);
         array_push($newArray, $data[$i]);
      }
      return $newArray;
   }
}

function test_input1($data)
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
function test_input2($data)
{
   $newArray = [];
   if (is_array($data)) {
      for ($i = 0; $i < count($data); $i++) {
         $data[$i] = addslashes($data[$i]);
         $data[$i] = trim($data[$i]);
         array_push($newArray, $data[$i]);
      }
      return $newArray;
   }
}
// text filter agar malumot kop bolsa ... qoyadi
function textFilter($text, $number)
{
   $textArray = str_split($text);
   $array = [];
   if (count($textArray) > $number) {
      for ($i = 0; $i <= $number; $i++) {
         array_push($array, $textArray[$i]);
      }
      array_push($array, '...');
      $text_Array = join("", $array);
      return $text_Array;
   } else {
      return $text;
   }
}

//getInsert// ma'lumot yozish sql sorov unversal
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

//malumotni o'qib olish databasedan
function getarray($sql)
{
   $array =  [];
   $i = 0;
   while ($r = $sql->fetch_array()) {
      $array[$i] = $r;
      $i++;
   }
   return $array;
}
// malumotni o'qib olish// massiv
function GetAll($tableName, $id, $val)
{
   $db = connection();
   if ($id == "false") {
      if ($val == "asc") {
         $sql = $db->query("SELECT * FROM $tableName ORDER BY id asc");
         return getarray($sql);
      } elseif ($val == "desc") {
         $sql = $db->query("SELECT * FROM $tableName ORDER BY id desc");
         return getarray($sql);
      }
   } else {
      $sql = $db->query("SELECT * FROM $tableName WHERE  `id` = $id");
      return getarray($sql);
   }  
}
// ixtiyoriy ustuni boyich oqib olish
function GetAllRow($tableName, $col,$val)
{
   $db = connection();
   $sql = $db->query("SELECT * FROM $tableName WHERE  $col = '$val' ORDER BY id desc");
   return getarray($sql);
}
// malumotni ikkta ustuni boyicha oqib olish
function GetAllustun($tableName, $col1,$val1,$col2,$val2)
{
   $db = connection();
   $sql = $db->query("SELECT * FROM $tableName WHERE  $col1 = '$val1' AND $col2 = '$val2'");
   return getarray($sql);
}
// limit boyicha chiqaradi
function GetAllRowLimit($tableName, $col,$val, $limit)
{
   $db = connection();
   $sql = $db->query("SELECT * FROM $tableName WHERE  $col = '$val' ORDER BY id desc LIMIT $limit");
   return getarray($sql);
}

//malumotlarni o'chirib tashlash.
function getItemsDelet($tableName, $column, $array)
{
   $db = connection();
   if (is_array($array)) {
      $count = count($array);
      $query = "DELETE FROM $tableName WHERE ";
      for ($i = 0; $i < $count; $i++) {
         $query .= $column . " =" . "'" . $array[$i] . "' OR";
      }
      $query = rtrim($query, "OR ");
      $sql = $db->query($query);
      if ($sql)
         return true;
      return false;
   }
}

// malumotlarni yangilash


// madalka js
function madalka()
{
?>
   <script>
      const NToastJS = document.querySelector('.NToastJS ');
      const NToastJS_content = document.querySelector('.NToastJS_content');
      if (localStorage.getItem('madaka') == 'active') {
         NToastJS.classList.add('showAni');
         NToastJS.classList.remove('hideAni');
         NToastJS_content.classList.add('active');
         setTimeout(() => {
            NToastJS.classList.add('hideAni');
            NToastJS.classList.remove('showAni');
            // NToastJS_content.classList.remov('active');
            localStorage.setItem('madaka', 'noactive');
         }, 7500);

      }
   </script>
<?php
}


// reflesh
function reflesh($url, $res)
{
?>
   <script>
      window.location = '<?= $url . $res ?>';
   </script>
<?php
}

function getHasId($tablename, $col, $id, $condition = null)
{
   if (is_array($col) && is_array($id)) {
      if (count($col) === count($id)) {
         $sql = "SELECT * FROM $tablename WHERE ";
         for ($i = 0; $i < count($col); $i++) {
            $sql .= $col[$i] . " = '" . strip_tags(addslashes($id[$i])) . "' AND ";
         }
         $sql = rtrim($sql, 'AND ');
         $sql .= $condition;
      }
   }
         $db = connection();
         $query = $db->query($sql);
         $count1 = count(getarray($query));
         if ($count1)
            return true;
         return false;
}
?>