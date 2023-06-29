<html>

<head>
    <link rel="stylesheet" href="page1.css">
</head>

<body>
    <div class="container">
        <form action="page2.php" method="post" onsubmit="return mcookie()">
            <table>
                <tr>
                    <td>
                        First name:
                    </td>
                    <td>
                        <input type="text" name="fname" id="fname">
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
                        <input type="text" name="mail" id="mail">
                </tr>
                <tr>
                    <td>
                        Gender:
                    </td>
                    <td id="radio">
                        <input type="radio" name="gender" value="male">MALE
                        <input type="radio" name="gender" value="female">FEMALE
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="submit" id="submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

<script>
    function mcookie() {
        var x = document.getElementById("fname").value;
        var y = document.getElementById("mail").value;

        if (x != "" && y != "") {
            document.cookie = "firstname=" + x
            document.cookie = "email=" + y
            return true
        } else {
            alert("Enter Firstname and/or email")
            return false
        }
    }
</script>


</html>