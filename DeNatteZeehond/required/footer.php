<footer class="text-center text-lg-start mt-5 fixed-bottom">
    <div class="text-center p-3">
        <?php if ($page == "account/login" || $page == "account/register" || $page == "administration/ add_customer" || $page == "administration/delete_customer" || $page == "administration/edit_customer" || $page == "administration/overview" || $page == "profile/editProfile" || $page == "profile/deleteProfile" || $page == "tickets/editTicket" || $page == "tickets/deleteTicket" || $page == "tickets/addTicket") : ?>
            <p>&copy; 2022 | <a href="./" class="text-decoration-none"><span class="text-dark">De Natte Zeehond </span></p></a>
            <p><a href="./" class="text-decoration-none"><span class="text-dark"> <img src="../images/insta.png" width="35vh" height="35vh"> <img src="../images/facebook.png" width="35vh" height="35vh"> <img src="../images/linkedin.png" width="35vh" height="35vh"> <img src="../images/tik-tok.png" width="35vh" height="35vh"></span></p></a>
        <?php else: ?>
            <p>&copy; 2022 | <a href="./" class="text-decoration-none"><span class="text-dark">De Natte Zeehond </span></p></a>
            <p><a href="./" class="text-decoration-none"><span class="text-dark"> <img src="images/insta.png" width="35vh" height="35vh"> <img src="images/facebook.png" width="35vh" height="35vh"> <img src="images/linkedin.png" width="35vh" height="35vh"> <img src="images/tik-tok.png" width="35vh" height="35vh"></span></p></a>
        <?php endif; ?>
    </div>
    
</footer>