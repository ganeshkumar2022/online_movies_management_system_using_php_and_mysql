<?php
$con=mysqli_connect("localhost","root","","movies_world");
if(isset($_POST["add_category"]))
{
    add_category();
}
elseif(isset($_POST["add_sub_category"]))
{
    add_sub_category();
}
elseif(isset($_POST["update_password"]))
{
    update_password();
}
elseif(isset($_POST["edit_category"]))
{
    edit_category();
}
elseif(isset($_POST["add_movies"]))
{
    add_movies();
}
elseif(isset($_POST["edit_movies"]))
{
    edit_movies();
}
elseif(isset($_POST["add_director"]))
{
    add_director();
}
elseif(isset($_POST["edit_director"]))
{
    edit_director();
}
elseif(isset($_POST["add_star"]))
{
    add_star();
}
elseif(isset($_POST["edit_star"]))
{
    edit_star();
}
elseif(isset($_POST["add_scene"]))
{
    add_scene();
}

function add_category()
{
    global $con;
    $name=$_POST["name"];
    $sql="insert into category values (NULL,'$name',NULL)";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Category created successfully');window.location.replace('category.php');</script>";
    }
    else
    {
        echo "<script>alert('Error to create category');window.location.replace('category.php');</script>";
    }

}
function add_sub_category()
{
    global $con;
    $category_id=$_POST["category_id"];
    $sub_category_name=$_POST["sub_category_name"];
    $sql="insert into subcategory values (NULL,$category_id,'$sub_category_name',NULL)";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Subcategory created successfully');window.location.replace('subcategory.php');</script>";
    }
    else
    {
        echo "<script>alert('Error to create Subcategory');window.location.replace('subcategory.php');</script>";
    }

}
function update_password()
{
    $old_password=$_POST["old_password"];
    $new_password=$_POST["new_password"];
    $confirm_password=$_POST["confirm_password"];
    global $con;
    $sql="select * from admin where id=1";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $password=$row["password"];
    if(password_verify($old_password,$password))
    {
        $password=password_hash($new_password, PASSWORD_DEFAULT);
        $sql2="update admin set password='$password' where id=1";
        if(mysqli_query($con,$sql2))
        {
            echo "<script>alert('Password updated successfully');window.location.replace('myprofile.php');</script>";
        }
        else
        {
            echo "<script>alert('Error to update password');window.location.replace('myprofile.php');</script>";
        }
    }
    else
    {
        echo "<script>alert('current password is not correct');window.location.replace('myprofile.php');</script>";
    }
}
function edit_category()
{
    $id=$_POST["id"];
    $name=$_POST["name"];
    global $con;
    $sql="update category set name='$name' where cid=$id";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Category updated successfully');window.location.replace('edit_category.php?id=$id');</script>";
    }
    else
    {
        echo "<script>alert('Error to update category');window.location.replace('edit_category.php?id=$id');</script>";
    }
}
function add_movies()
{
global $con;
$mcategory_id=$_POST["category_id"];
$msub_category_id=$_POST["sub_category_id"];
$movie_name=$_POST["movie_name"];
$movie_year=$_POST["movie_year"];
//$movie_image=$_POST["movie_image"];
$movie_story=$_POST["movie_story"];
$movie_trailor=$_POST["movie_trailor"];
//$torrent_file=$_POST["torrent_file"];
$movie_dir="movies/";
$torrent_dir="torrents/";
$movie_image=$movie_dir.basename($_FILES["movie_image"]["name"]);
$torrent_file=$torrent_dir.basename($_FILES["torrent_file"]["name"]);
if(strstr($movie_image,".jpg") || strstr($movie_image,".png") || strstr($movie_image,".jfif") || strstr($movie_image,".webp"))
{
    if(move_uploaded_file($_FILES["movie_image"]["tmp_name"],$movie_image))
    {
        if(strstr($torrent_file,".torrent"))
        {
            if(move_uploaded_file($_FILES["torrent_file"]["tmp_name"],$torrent_file))
            {
                $sql="insert into add_movies values (NULL,'$mcategory_id','$msub_category_id','$movie_name','$movie_year',
                '$movie_image','$movie_story','$movie_trailor','$torrent_file',NULL)";
                if(mysqli_query($con,$sql))
                {
                    echo "<script>alert('Movies added successfully');window.location.replace('add_movies.php');</script>";
                }
                else
                {
                    echo "<script>alert('Error to add movies');window.location.replace('add_movies.php');</script>";
                }
            }
            else
            {
                echo "<script>alert('Error to add torrent file');window.location.replace('add_movies.php');</script>";
            }
        }
        
        else
        {
            echo "<script>alert('Please choose torrent files only...');window.location.replace('add_movies.php');</script>";
        }    
    }
    else
    {
        echo "<script>alert('Error to add image');window.location.replace('add_movies.php');</script>";
    }
}   
else
{
    echo "<script>alert('Please choose image files only...');window.location.replace('add_movies.php');</script>";
}
}

//edit movies start

function edit_movies()
{
global $con;
$id=$_POST["id"];
$movie_dir="movies/";
$torrent_dir="torrents/";
$movie_image=$movie_dir.basename($_FILES["movie_image"]["name"]);
$torrent_file=$torrent_dir.basename($_FILES["torrent_file"]["name"]);
if($_FILES["movie_image"]["name"]!="")
{
    if(strstr($movie_image,".jpg") || strstr($movie_image,".png") || strstr($movie_image,".jfif") || strstr($movie_image,".webp"))
    {
        if(move_uploaded_file($_FILES["movie_image"]["tmp_name"],$movie_image))
        {
        $sql="update add_movies set movie_image='$movie_image' where mid=$id";
        if(mysqli_query($con,$sql))
        {

        }
        }
    }
    else
    {
        echo "<script>alert('Please choose image files only...');window.location.replace('edit_movie.php?id=$id');</script>";
        die();
    }
}
if($_FILES["torrent_file"]["name"]!="")
{
    if(strstr($torrent_file,".torrent"))
    {
    if(move_uploaded_file($_FILES["torrent_file"]["tmp_name"],$torrent_file))
    {
    $sql="update add_movies set torrent_file='$torrent_file' where mid=$id";
    if(mysqli_query($con,$sql))
    {
        
    }
    }
    }
    else
    {
        echo "<script>alert('Please choose torrent files only...');window.location.replace('edit_movie.php?id=$id');</script>";
        die();
    }
}
$mcategory_id=$_POST["category_id"];
$msub_category_id=$_POST["sub_category_id"];
$movie_name=$_POST["movie_name"];
$movie_year=$_POST["movie_year"];
//$movie_image=$_POST["movie_image"];
$movie_story=$_POST["movie_story"];
$movie_trailor=$_POST["movie_trailor"];
//$torrent_file=$_POST["torrent_file"];
$sql="update add_movies set mcategory_id='$mcategory_id',msub_category_id='$msub_category_id',
movie_name='$movie_name',movie_year='$movie_year',movie_story='$movie_story',movie_trailor='$movie_trailor' where mid=$id";
if(mysqli_query($con,$sql))
{
echo "<script>alert('Movie Updated successfully');window.location.replace('edit_movie.php?id=$id');</script>";
}
else
{
echo "<script>alert('Error to Update movie');window.location.replace('edit_movie.php?id=$id');</script>";
}
           
}

//edit movies end

//add director start

function add_director()
{
    global $con;
    $movie_id=$_POST["movie_id"];
    $director_name=$_POST["director_name"];
    $dir="director/";
    $movie_image=$dir.basename($_FILES["director_image"]["name"]);
    if(strstr($movie_image,".jpg") || strstr($movie_image,".png") || strstr($movie_image,".jfif") || strstr($movie_image,".webp"))
    {
        if(move_uploaded_file($_FILES["director_image"]["tmp_name"],$movie_image))
        {
        $sql="insert into director values (NULL,$movie_id,'$director_name','$movie_image')";
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Add director to movies successfully...');window.location.replace('add_director.php');</script>";
        }
        else
        {
            echo "<script>alert('Error to add director to movies...');window.location.replace('add_director.php');</script>";
        }
        }
    }
    else
    {
        echo "<script>alert('Please choose image files only...');window.location.replace('add_director.php');</script>";
        die();
    }

}

//add director end

//edit director start
function edit_director()
{
    global $con;
    $id=$_POST["id"];
    $movie_id=$_POST["movie_id"];
    $director_name=$_POST["director_name"];
    $dir="director/";
    $movie_image=$dir.basename($_FILES["director_image"]["name"]);
    $sql="update director set movie_id=$movie_id,director_name='$director_name' where dir_id=$id";
    if($_FILES["director_image"]["name"]!="")
    {
        $sql="update director set movie_id=$movie_id,director_name='$director_name',
        director_image='$movie_image' where dir_id=$id";
        if(strstr($movie_image,".jpg") || strstr($movie_image,".png") || strstr($movie_image,".jfif") || strstr($movie_image,".webp"))
        {
            if(move_uploaded_file($_FILES["director_image"]["tmp_name"],$movie_image))
            {

            }
            else
            {

            }
        }
        else
        {
            echo "<script>alert('Please choose image files only...');window.location.replace('add_director.php');</script>";
            die();
        }
    }
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Update director to movies successfully...');window.location.replace('edit_director.php?id=$id');</script>";
    }
    else
    {
        echo "<script>alert('Error to update director to movies...');window.location.replace('edit_director.php?id=$id');</script>";
    }

}

//edit director end


//add star start

function add_star()
{
    global $con;
    $movie_id=$_POST["movie_id"];
    $star_name=$_POST["star_name"];
    $dir="star/";
    $movie_image=$dir.basename($_FILES["star_image"]["name"]);
    if(strstr($movie_image,".jpg") || strstr($movie_image,".png") || strstr($movie_image,".jfif") || strstr($movie_image,".webp"))
    {
        if(move_uploaded_file($_FILES["star_image"]["tmp_name"],$movie_image))
        {
        $sql="insert into star values (NULL,$movie_id,'$star_name','$movie_image')";
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Add star to movies successfully...');window.location.replace('add_stars.php');</script>";
        }
        else
        {
            echo "<script>alert('Error to add star to movies...');window.location.replace('add_stars.php');</script>";
        }
        }
    }
    else
    {
        echo "<script>alert('Please choose image files only...');window.location.replace('add_director.php');</script>";
        die();
    }

}

//add star end

//edit star start

function edit_star()
{
    global $con;
    $id=$_POST["id"];
    $movie_id=$_POST["movie_id"];
    $star_name=$_POST["star_name"];
    $dir="star/";
    $movie_image=$dir.basename($_FILES["star_image"]["name"]);
    $sql="update star set movie_id=$movie_id,star_name='$star_name' where star_id=$id";
    if($_FILES["star_image"]["name"]!="")
    {
        $sql="update star set movie_id=$movie_id,star_name='$star_name',
        star_image='$movie_image' where star_id=$id";
        if(strstr($movie_image,".jpg") || strstr($movie_image,".png") || strstr($movie_image,".jfif") || strstr($movie_image,".webp"))
        {
            if(move_uploaded_file($_FILES["star_image"]["tmp_name"],$movie_image))
            {

            }
            else
            {

            }
        }
        else
        {
            echo "<script>alert('Please choose image files only...');window.location.replace('add_stars.php');</script>";
            die();
        }
    }
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Update star to movies successfully...');window.location.replace('edit_star.php?id=$id');</script>";
    }
    else
    {
        echo "<script>alert('Error to update star to movies...');window.location.replace('edit_star.php?id=$id');</script>";
    }

}

//edit star end


//add movie scenes start

function add_scene()
{
    global $con;
    $movie_id=$_POST["movie_id"];
    $dir="movie_scenes/";
    $movie_image=$dir.basename($_FILES["scene_image"]["name"]);
    if(strstr($movie_image,".jpg") || strstr($movie_image,".png") || strstr($movie_image,".jfif") || strstr($movie_image,".webp"))
    {
        if(move_uploaded_file($_FILES["scene_image"]["tmp_name"],$movie_image))
        {
        $sql="insert into movie_scenes values (NULL,$movie_id,'$movie_image')";
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Add movie scenes to movies successfully...');window.location.replace('add_scenes.php');</script>";
        }
        else
        {
            echo "<script>alert('Error to add scenes to movies...');window.location.replace('add_scenes.php');</script>";
        }
        }
    }
    else
    {
        echo "<script>alert('Please choose image files only...');window.location.replace('add_scenes.php');</script>";
        die();
    }

}

//add movie scenes end
?>