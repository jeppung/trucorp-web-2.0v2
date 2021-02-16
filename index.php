<?php
$link = new mysqli("172.21.0.2", "root", "dbpass123", "Trucorp");

echo '<b>Table users</b>';
echo '  <style> 
         table, th, td{
                border: 1px solid black;
        </style>
        <table>
                <tr>    
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kantor(Pusat/Cabang)</th>   
                </tr>';    

        if($result = $link->query("SELECT * FROM users")){
                while($row = $result->fetch_assoc()){
                        $field1 = $row['ID'];
                        $field2 = $row['Nama'];
                        $field3 = $row['Kantor(Pusat / Cabang)'];

                echo '<tr><td>'.$field1.'</td>';
                echo '<td>'.$field2.'</td>';
                echo '<td>'.$field3.'</td></tr>';
                }
        }
?>


