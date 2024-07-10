<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ตารางข้อมูลนักเรียน</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>ให้นักเรียนเขียนคำสั่งภาษา Php ชื่อนักเรียนลงในตารางตามรูปแบบ</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ห้อง</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>นายทดสอบ</td>";
                echo "<td>ระบบ</td>";
                echo "<td>6/10</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
