<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Curriculum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form id="edit_form" action="../include/curEdit.inc.php" method="POST">
          <div class="form-group">
            <label for="course_code">Course Code:</label>
            <input type="text" class="form-control" id="course_code" name="course_code">
          </div>
          <div class="form-group">
            <label for="descriptive_title">Descriptive Title:</label>
            <input type="text" class="form-control" id="descriptive_title" name="descriptive_title">
          </div>
          <div class="form-group">
            <label for="instructor_name">Instructor Name:</label>
            <input type="text" class="form-control" id="instructor_name" name="instructor_name">
          </div>
          <div class="form-group">
            <label for="lec">LEC:</label>
            <input type="text" class="form-control" id="lec" name="lec">
          </div>
          <div class="form-group">
            <label for="lab">LAB:</label>
            <input type="text" class="form-control" id="lab" name="lab">
          </div>
          <div class="form-group">
            <label for="total_units">Total Units:</label>
            <input type="text" class="form-control" id="total_units" name="total_units">
          </div>
          <input type="hidden" name="id" id="edit_id">
          <input type="hidden" name="selected" value="<?php echo $course; ?>">
          <input type="hidden" name="ylvl" value="<?php echo $yearlvl; ?>">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>

      </div>
    </div>
  </div>
</div>

