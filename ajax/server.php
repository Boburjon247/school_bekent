<?php
include '../config.php';
include '../libs/libs.php';
$today = date("Y-m-d");

$db = connection();

// fetchData oqib iolish
if ($_GET['action'] === 'fetchData') {
    $sql = "SELECT * FROM subject ORDER BY id desc";
    $result = mysqli_query($db, $sql);
    $data = [];
    ksort($data);
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    mysqli_close($db);
    header("Content-Type: application/json");
    echo json_encode([
        'data' => $data,
    ]);
}


// qoshish
if ($_GET['action'] === 'insertSubject') {
    if (isset($_GET['name']) && !empty($_GET['name'])) {
        $name = mysqli_real_escape_string($db, $_GET['name']);
        $array = test_input1([$name]);
        if (getInsert('subject', ['title'], $array)) {
            echo json_encode([
                "status" => 200,
                "message" => "Yangi fan qo'shildi 😁"
            ]);
        } else {
            echo json_encode([
                "status" => 500,
                "message" => "Ma'lumotlarda xatolik 🚫"
            ]);
        }
    } else {
        echo json_encode([
            "status" => 400,
            "message" => "Ma'lumotlarda xatolik ⛔"
        ]);
    }
}

// yangilash uchun oqib olish
if ($_GET['action'] === 'editdata') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM subject WHERE `id` = $id";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode([
            'status' => 200,
            'data' =>   $data
        ]);
    } else {
        echo json_encode([
            'status' => 404,
            'messege' => "Bu id da ma'lumot topilmadi ⛔"
        ]);
    }
    mysqli_close($db);
};
//yangilash
if ($_GET['action'] === 'editSubject') {
    if (isset($_GET['name']) && !empty($_GET['name'])) {
        $id = $_GET['id'];
        $name = mysqli_real_escape_string($db, $_GET['name']);
        $sql = "UPDATE subject SET title = '$name' WHERE id = '$id'";
        if (mysqli_query($db, $sql)) {
            echo json_encode([
                "status" => 200,
                "message" => "Ma'lumot yangilandi 😁"
            ]);
        } else {
            echo json_encode([
                "status" => 500,
                "message" => "Ma'lumotlarda xatolik 🚫"
            ]);
        }
        mysqli_close($db);
    } else {
        echo json_encode([
            "status" => 400,
            "message" => "Ma'lumotlarda xatolik ⛔"
        ]);
    }
}
//o'chirish / delate
if ($_GET['action'] === 'deletdata') {
    $id = $_GET['id'];
    $sql = "DELETE FROM subject WHERE `id` = '$id'";
    if (mysqli_query($db, $sql)) {
        echo json_encode([
            'status' => 200,
            'message' => "Ma'lumot o'chirildi 😢"
        ]);
    } else {
        echo json_encode([
            'status' => 500,
            'message' => "Ma'lumot o'chirilmadi 🙂"
        ]);
    }
}

// oquv yili qoshish
if ($_GET['action'] === 'insertYearName') {
    if (isset($_GET['name']) && !empty($_GET['name'])) {
        // $name = mysqli_real_escape_string($db, );
        $array = test_input([$_GET["name"]]);
        if (getInsert('year', ["name"], $array)) {
            echo json_encode([
                "status" => 200,
                "message" => "Yangi o'quv yili Yaratildi 😁"
            ]);
        } else {
            echo json_encode([
                "status" => 500,
                "message" => "Ma'lumotlarda xatolik 🚫"
            ]);
        }
    } else {
        echo json_encode([
            "status" => 400,
            "message" => "Ma'lumotlarda xatolik ⛔"
        ]);
    }
}

// fetchData oqib iolish yillarni
if ($_GET['action'] === 'fetchDataYear') {
    $sql = "SELECT * FROM year ORDER BY id desc";
    $result = mysqli_query($db, $sql);
    $data = [];
    ksort($data);
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    mysqli_close($db);
    header("Content-Type: application/json");
    echo json_encode([
        'data' => $data,
    ]);
}
//yillar o'chirish / delate
if ($_GET['action'] === 'YearDdelete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM year WHERE `id` = '$id'";
    if (mysqli_query($db, $sql)) {
        echo json_encode([
            'status' => 200,
            'message' => "Ma'lumot o'chirildi 😢"
        ]);
    } else {
        echo json_encode([
            'status' => 500,
            'message' => "Ma'lumot o'chirilmadi 🙂"
        ]);
    }
}
// yangilash uchun oqib olish
if ($_GET['action'] === 'editdata2') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM year WHERE `id` = $id";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode([
            'status' => 200,
            'data' =>   $data
        ]);
    } else {
        echo json_encode([
            'status' => 404,
            'messege' => "Bu id da ma'lumot topilmadi ⛔"
        ]);
    }
    mysqli_close($db);
};
if ($_GET['action'] === 'edityear2') {
    if (isset($_GET['name']) && !empty($_GET['name'])) {
        $id = $_GET['id'];
        $name = mysqli_real_escape_string($db, $_GET['name']);
        $sql = "UPDATE year SET name = '$name' WHERE id = '$id'";
        if (mysqli_query($db, $sql)) {
            echo json_encode([
                "status" => 200,
                "message" => "Ma'lumot yangilandi 😁"
            ]);
        } else {
            echo json_encode([
                "status" => 500,
                "message" => "Ma'lumotlarda xatolik 🚫"
            ]);
        }
        mysqli_close($db);
    } else {
        echo json_encode([
            "status" => 400,
            "message" => "Ma'lumotlarda xatolik ⛔"
        ]);
    }
}
