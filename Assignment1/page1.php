<html>

<head>

</head>

<body>
    <form action="page2.php" method="post">
        <table>
            <tr>
                <td>
                    First name:
                </td>
                <td>
                    <input type="text" name="fname" id="fname" oninput="cfname()">
                </td>
            </tr>
            <tr>
                <td>
                    Middle name:
                </td>
                <td>
                    <input type="text" name="lname" id="lname">
                </td>
            </tr>
            <tr>
                <td>
                    Phone no.:
                </td>
                <td>
                    <input type="text" name="pno" id="pno">
                </td>
            </tr>
            <tr>
                <td>
                    E-mail:
                </td>
                <td>
                    <input type="text" name="mail" id="mail" oninput="cmail()">
                </td>
            </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <input type="radio" name="gender" value="male">MALE
                    <input type="radio" name="gender" value="female">FEMALE
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

<script>
    function cfname() {
        <?php

        $cookuie_value = $_POST["fname"];
        setcookie("firstname", $cookuie_value, time() + (86400 * 30), "/");
        ?>
    }

    function cmail() {
        <?php

        $cookuie_value = $_POST["mail"];
        setcookie("email", $cookuie_value, time() + (86400 * 30), "/");
        ?>
    }
</script>


</html>