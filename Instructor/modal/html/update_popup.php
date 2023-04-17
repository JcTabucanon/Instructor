<div id="updateModal" class="updateModal">
     <div class="modal-content">
     <span class="close_modal_edit">&times;</span>
          <div class="modal-content-wrapper">
               <!-- Update part-->
               <form method="post" action="account.php" class="form-update-can">
                    <div class="update-can">
                         <div class="fname">
                              <input type="text" name="name" placeholder="Firstname" value="" required>
                         </div>
                         <div class="lname">
                              <input type="text" name="name"  placeholder="Lastname" value="" required>
                         </div>
                         <div class="mi">
                              <input type="text" name="name" placeholder="M.I" value="" required>
                         </div>
                    </div>
                    <div class="update-can">
                         <div class="bday">
                              <input type="date" name="bday" id="" required>
                         </div>
                         <div class="gender-update-can">
                              <div class="male">
                                   
                                   <input type="radio" name="gender" value="male" id="male" onclick="selectOne(this)">
                                   <label>Male</label>
                              </div>
                              <div class="female">
                                   <input type="radio" name="gender" value="female" id="female" onclick="selectOne(this)">
                                   <label>Female</label>
                              </div>
                         </div>
                    </div>
                    <div class="update-can">
                         <div class="c">
                              <input class="email" type="email" name="email" placeholder="example@sample.com" value="" required>
                         </div>
                    </div>
                    <div class="update-can">
                         <div class="c">
                              <input class="password" type="password" placeholder="Password" name="password" required>
                         </div>
                    </div>
                    <div class="update-can">
                         <div class="c">
                              <input class="c-password" type="password" placeholder="Confirm password" name="confirm_password" required>
                         </div>
                    </div>                                   
                    <input class="btn_update" type="submit" value="Update Account">

               <!-- Update part-->

               </form>
          </div>
     </div>
</div>
<script>
     function selectOne(selected) {
          // get all radio buttons with the same name
          var radios = document.getElementsByName(selected.name);

          // loop through all radio buttons
          for (var i = 0; i < radios.length; i++) {
               // uncheck all radio buttons except the selected one
               if (radios[i] !== selected) {
               radios[i].checked = false;
               }
          }
     }
</script>