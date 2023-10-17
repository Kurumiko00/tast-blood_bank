<html>
    <head><title>Add Donor</title></head>
    <body>        
        <center>
            <h1>Add Donor</h1>
            <form action="do_add_student.php" method="post">
                <table width="40%" border="1">
                    <tr><td>ID card:</td><td><input type="number" name="user_id" /></td></tr>
                    <tr><td>Name:</td><td><input type="text" name="name" /></td></tr>
                    <tr><td>lastname:</td><td><input type="text" name="lastname" /></td></tr>
                    <tr><td>blood_group:</td><td><input type="text" name="blood_group" /></td></tr>
                    <tr><td>quantity:</td><td><input type="number" name="quantity" /></td></tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <select name="gender">
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                            <tr><td>age:</td><td><input type="number" name="age" /></td></tr>
                            <tr><td>date_donate:</td><td><input type="date" name="date_donate" /></td></tr>
                            <tr><td>contact:</td><td><input type="number" name="contact" /></td></tr>
                            
                        </td>
                    </tr>
                    <tr><td colspan="2" style="text-align:center;"><input type="submit" value="ADD" /></td></tr>
                </table>
            </form>
        </center>
    </body>
</html>