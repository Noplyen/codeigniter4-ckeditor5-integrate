<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 30%;
            margin: auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: black;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td a {
            text-decoration: none;
            color: black;
        }

        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Folder List</h1>
<table>
    <thead>
    <tr>
        <th >Folder Name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($root as $item): ?>
        <tr>
            <td>
<!--                replacing '/' http url doesnt support for symbols, they will transform into unicode-->
                <a href="<?=base_url('file-manager?folder='.str_replace('/', '', $item))?>">
<!--                replace for display data, if doesnt replace will shown folder_1/ -->
                    <?=str_replace('/', '', $item)?>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
