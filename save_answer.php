<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "quiz_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari POST request
$user_id = $_POST['user_id'];
$answers = $_POST['answers'];

// Menyimpan setiap jawaban ke database
foreach ($answers as $question_id => $answer_data) {
    $user_answer = $answer_data['answer'];
    $is_correct = $answer_data['is_correct'] ? 1 : 0;

    $sql = "INSERT INTO quiz_answers (user_id, question_id, user_answer, is_correct) 
            VALUES ('$user_id', $question_id, '$user_answer', $is_correct)";

    if ($conn->query($sql) === TRUE) {
        echo "Jawaban tersimpan dengan sukses";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!--  -->
<div class="user-actions">
                    <?php
                    session_start();
                    if (isset($_SESSION['user_id'])) {
                        echo '<span class="user-name">' . htmlspecialchars($_SESSION['username']) . '</span>';
                        echo '<a href="login_register/logout.php" class="btn-logout">Keluar</a>';
                    } else {
                        echo '<a href="index.php" class="btn-login" onclick="return confirm(\'Apakah Anda yakin ingin keluar?\')">logout</a>';
                    }
                    ?>
