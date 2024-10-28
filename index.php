<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Qty Jika Keluar</title>
</head>
<body>

<style>

</style>

<table id="statusTable" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Mesin</th>
            <th>Voltage</th>
            <th>Amper</th>
            <th>Phase</th>
            <th>Total daya</th>
            <th>Lama Pemakaian</th>
            <th>Tarif/Kwh</th>
            <th>Total (Rp)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama_mesin"] . "</td>";
                echo "<td>" . $row["voltage"] . "</td>";
                echo "<td>" . $row["amper"] . "</td>";
                echo "<td>" . $row["phase"] . "</td>";
                echo "<td>" . $row["total_daya"] . "</td>";
                echo "<td>" . $row["lama_pemakaian"] . "</td>";
                echo "<td>" . $row["tarifkwh"] . "</td>";
                echo "<td>" . $row["totalrp"] . "</td>";          
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Tidak ada data</td></tr>";
        }
        ?>
    </tbody>
</table>
</body>
</html>
