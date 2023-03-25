<?php
echo "
<nav class='navbar'>
        <div class='logo'>
          <a href='/webProject/mvc/public/index'><img src='/webProject/mvc/public/Images/myLogo.png' height='auto' width='156' /></a>
        </div>
      <ul class='nav-links'>
       <div class='menu'>
       <li><a href='/webProject/mvc/public/hhome'>Home</a></li>
       <li><a href='/webProject/mvc/public/aaboutUs'>About</a></li>
       <li><a href='/webProject/mvc/public/pproducts'>Windows</a></li>
       <li><a href='/webProject/mvc/public/ccontactUs'>Contact</a></li>
       <li>
       <form action='/webProject/mvc/public/User/logOut' method='POST'>
       <button class='logoutButton' name='logout_btn' type='submit'>Logout</button>
       </form>
       </li>
       </div>
     </ul>
   </nav>";