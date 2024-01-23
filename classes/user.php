<?php
require_once('../system/db.php');
?>

<?php
class User
{
    public function isCategoryExists($categoryName)
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "SELECT COUNT(*) as count FROM category WHERE categoryName = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $categoryName);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        return ($row['count'] > 0);
    }



    public function show_users()
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "select * from users order by userid asc";
        $result = $db->query($query);
        $db->close();
        return $result;
    }

    public function insert_category($categoryName)
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $categoryName = mysqli_real_escape_string($db, $categoryName);

        if (empty($categoryName)) {
            $alert = "Hãy nhập tên loại sản phẩm!";
            return $alert;
        } else {
            if (!$this->isCategoryExists($categoryName)) {
                $query = "insert into category(categoryName) values('$categoryName')";
                $result = $db->query($query);
                $db->close();
                if ($result) {
                    $alert = "<span class='success'> Thành công! <?span>";
                    return $alert;
                } else {
                    $alert = "<span class='success'> Lỗi! <?span>";
                    return $alert;
                }
            }
        }
    }

    public function update_category($id, $categoryName)
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        if (!$this->isCategoryExists($categoryName)) {
            $query = "update category set categoryName = '$categoryName' where categoryID = $id";
            $result = $db->query($query);
            if ($result) {
                $alert = "<span class='succsess'> Thành công!</span>";
                return $alert;
            } else {
                $alert = "<span class='succsess'> Lỗi!</span>";
                return $alert;
            }
        }
    }


    public function del_category($id)
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "delete from category where categoryID = '$id'";
        $result = $db->query($query);
        $db->close();
        if ($result) {
            $alert = "<span class='success'> Thành công! <?span>";
            return $alert;
        } else {
            $alert = "<span class='success'> Lỗi! <?span>";
            return $alert;
        }
    }

    public function getcategory($id)
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "select * from users where userid='$id'";
        $result = $db->query($query);
        return $result;
    }
}
?>