<div id="updateModal" class="updateModal">
     <div class="modal-content">
     <span class="close">&times;</span>
          <form method="post" action="account.php">
               <label for="name">Name:</label>
               <input type="text" name="name" value="John Doe" required><br><br>
               
               <label for="email">Email:</label>
               <input type="email" name="email" value="johndoe@example.com" required><br><br>
               
               <label for="password">Password:</label>
               <input type="password" name="password" required><br><br>
               
               <label for="confirm_password">Confirm Password:</label>
               <input type="password" name="confirm_password" required><br><br>
               
               <input type="submit" value="Update Account">
          </form>
     </div>
</div>
