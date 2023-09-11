<?php
include 'config/connection.php';

if (!empty($_POST["project"])) {
    $projectID = $_POST["project"];
    $query = "SELECT * FROM module WHERE project = $projectID";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        echo '<option value="">Select Module</option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['ID'] . '">' . $row['Module_name'] . '</option>';
        }
    } else {
        echo '<option value="">Module not available</option>';
    }
} elseif (!empty($_POST["module"])) {
    $moduleID = $_POST["module"];
    $query = "SELECT * FROM main_menu WHERE module = $moduleID";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        echo '<option value="">Select Main Menu</option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
        }
    } else {
        echo '<option value="">Main Menu not available</option>';
    }
}
?>