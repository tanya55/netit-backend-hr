<html>
    <head>
        <meta charset="UTF-8">
        <title>��������� �� ������� � ���������� �� ������</title>
    </head>
    <body>
        <?php
        echo  Database::delete('tb_users', array('age' => '10'));
        ?>
    </body>
</html>
