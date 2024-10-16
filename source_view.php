<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid View</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        


    </style>
</head>
<body>



<table>
   
    <thead>
        <tr>
            <th>Source</th>
            <?php foreach($columns as $column): ?>
                <td><?php echo $column->name;  ?>
                </td>
            <?php endforeach; ?>
        </tr>
    </thead>

    
    <tbody>
        <?php foreach($rows as $row): ?>
        <tr>
                <td><?php echo $row->name; ?>
                </td>
            <td>0</td>  
            <td>0</td> 
            <td>0</td>  
            <td>0</td>  
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>

</body>
</html>
