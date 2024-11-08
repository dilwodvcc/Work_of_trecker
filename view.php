<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work Of Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="">
<div class="container">
    <h1 class="text-primary text-center mt-4">Work Of Tracker</h1>
    <div class="row align-items-end my-3">
        <div class="col">
            <form method="post" class="row g-3 mt-3 align-items-end">
                <div class="col-auto">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="col-auto">
                    <label for="arrived_at">Arrived At</label>
                    <input type="datetime-local" name="arrived_at" class="form-control" id="arrived_at">
                </div>
                <div class="col-auto">
                    <label for="leaved_at">Leaved At</label>
                    <input type="datetime-local" name="leaved_at" class="form-control" id="leaved_at">
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
                <div class="col-auto">
                    <button form="export" type="submit" class="btn btn-success">Export</button>
                </div>
            </form>
            <form action="" id="export" method="post">
                <input type="text" name="export" value="true" hidden="">
            </form>
        </div>
    </div>
    <table class="table table-primary table-hover">
        <thead>
        <tr class="table-secondary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Arrived At</th>
            <th scope="col">Leaved At</th>
            <th scope="col">Required work</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        global $records;
        foreach ($records as $record) {
            echo "<tr>
                <td>{$record['id']}</td>
                <td>{$record['name']}</td>
                <td>{$record['arrived_at']}</td>
                <td>{$record['leaved_at']}</td>
                <td>" . gmdate('H:i',$record['required_of']) . "</td>
                <td><a href='index.php?done=" . $record['id'] . "'>Done</a></td>
            </tr>";
        }

        ?>
        </tbody>
    </table>
</div>


</body>
</html>