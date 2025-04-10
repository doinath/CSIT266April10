<?php    
    include 'connect.php';
    include 'readrecordsvehicle.php';   
    //require_once 'includes/header.php'; 
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #fef9f4;
        margin: 20px;
    }

    h2 {
        color: white;
        margin: 0;
        padding: 10px 0;
    }

    .header {
        background-color: #FAB12F;
        text-align: center;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .button-group {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-bottom: 15px;
    }

    .button-group button {
        background-color: #FAB12F;
        color: black;
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
    }

    .button-group button a {
        text-decoration: none;
        color: inherit;
    }

    table {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #fff8dc;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    thead {
        background-color: #f5c842;
    }

    th, td {
        padding: 14px;
        text-align: center;
        border-bottom: 1px solid #ccc;
    }

    tbody tr:hover {
        background-color: #fff0b3;
    }

    .action-btns button {
        background-color: #e0a800;
        color: white;
        padding: 6px 10px;
        border: none;
        border-radius: 4px;
        margin: 0 2px;
        cursor: pointer;
    }

    .action-btns button a {
        color: white;
        text-decoration: none;
    }
</style>

<div class="button-group">
	<button><a href="register.php">Add Vehicle</a></button>
	<button><a href="logout.php">Logout</a></button>
</div> 

<div class="header">
    <h2>List of Vehicles</h2>
</div>

<div>
    <table>
        <thead>
            <tr> 
                <th>License Plate</th>
                <th>Vehicle Type</th>
                <th>Vehicle Brand</th>
                <th>Actions</th>
            </tr> 
        </thead>  
        <tbody>
            <?php while($row = $resultset->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['license_plate']; ?></td>
                    <td><?php echo $row['vehicle_type']; ?></td>
                    <td><?php echo $row['vehicle_brand']; ?></td> 
                    <td class="action-btns">
                        <button><a href="update.php?license_plate=<?php echo $row['license_plate']; ?>">Update</a></button>
                        <button><a href="delete.php?license_plate=<?php echo $row['license_plate']; ?>">Delete</a></button>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>         
    </table>
</div>

<?php //require_once 'includes/footer.php'; ?>
