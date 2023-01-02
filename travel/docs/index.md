## Admin login

In this part admin can login. But admin mush have a account on this site unless they can't login.

firstly [this](https://travelnone.000webhostapp.com/loginadmin.php) page will show.

After trying to login then another page will open with this **crude** code


`"SELECT * from admins having `email`='".$usermail."' and `password`='".$password1."'" ;`

The page link is here...
[Admin Login](https://travelnone.000webhostapp.com/loginadmin.php)



## Admin Home

After successfully login.

Admin can view his home page. He can see all the blog. And have a extra power to delete them.

here is **crud** code

`"SELECT * from blogs";`

The page is .. 
[Home](https://travelnone.000webhostapp.com/login_as_admin.php)

And Blog delete with this **crud** code on "deleteblog.php" page

`"DELETE FROM blogs WHERE bid=?";`

