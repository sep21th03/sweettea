<?php
ob_start();
session_Start();
$db = mysqli_connect("localhost", "root", "", "tea");
if (!$db) {
    die('loi ket noi csdl!');
}


class Database{
    public function select($query){
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $result = $db->query($query);
        $db->close();
        return $result;
    }
}



class Product
{
    public function show_product()
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "select * from product order by productID asc";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
    public function show_product_limit($limit)
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "select * from product LIMIT $limit";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
    public function insert_product($productName, $price, $description, $img)
    {
        $db = new mysqli("localhost", "root", "", "tea");
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $img = file_get_contents($_FILES["img"]["tmp_name"]);



        $query = "insert into product(productName, price, description, img) values('$productName', '$price', '$description', '$img')";
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

    public function update_product($id, $productName, $price, $description)
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "update product set productName = '$productName', price = '$price', description = '$description' where productID = $id";
        $result = $db->query($query);
        if ($result) {
            $alert = "<span class='succsess'> Thành công!</span>";
            return $alert;
        } else {
            $alert = "<span class='succsess'> Lỗi!</span>";
            return $alert;
        }
    }


    public function getproduct($id)
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "select * from product where productID='$id'";
        $result = $db->query($query);
        return $result;
    }

    public function getproductbyct($id)
    {
        $db = new mysqli("localhost", "root", "", "tea");
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "select * from product where categoryID='$id'";
        $result = $db->query($query);
        return $result;
    }
}
class Category
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



    public function show_category()
    {
        $db = new mysqli("localhost", "root", "", "tea");

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "select * from category order by categoryID asc";
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
        $query = "select * from category where categoryID='$id'";
        $result = $db->query($query);
        return $result;
    }
}
