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
            width: fit-content;
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
        .preview {
            display: flex;
            height: 100px;
            justify-content: center;
            align-items: center;
            overflow: hidden; }
    </style>
</head>
<body>
<h1 style="text-align: center;">File List</h1>
<h3 style="text-align: center;"><a href="<?=base_url('file-manager')?>" >back</a></h3>


<table>
    <thead>
    <tr>
        <th >File Name</th>
        <th >Image</th>
        <th >Download</th>
        <th >Delete</th>
    </tr>
    </thead>
    <tbody>

    <?php if (empty($image_files)):?>
    <tr>
        <td colspan="4" style="text-align: center">file are empty</td>
    </tr>
    <?php else:?>
        <?php foreach ($image_files as $item): ?>
            <tr>
                <td>
                    <a href="<?=$image_url.$item?>" target="_blank">
                        <?=$item?></a>
                </td>
                <td>
                    <div class="preview border pt-3">
                        <img id="file-ip-1-preview"
                             src="<?= $image_url.$item?>"
                             alt="image-preview"
                             height="140" width="140">
                    </div>
                </td>
                <td>
                    <a href="<?=$image_url.$item?>" download>download</a>
                </td>
                <td>
                    <form
                          action="<?=base_url('file-manager')?>"
                          method="post">

                        <input type="hidden" name="file_path" value="<?=$image_dir.$item?>">

                        <button
                                type="submit"
                                id="delete">delete
                        </button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>
    <?php endif;?>

    </tbody>
</table>
</body>
</html>
